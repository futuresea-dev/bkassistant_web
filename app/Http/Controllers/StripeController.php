<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use Stripe;
use Auth;
use Mail;
use App\Models\User;
use App\Models\AttorneyPayments;
use App\Models\AttorneyCards;
use App\Models\ClientApplicationPayment;
use App\Models\AdminPaymentSettings;
use App\Models\AttorneySubscription;
use App\Mail\WelcomeAboard;
class StripeController extends Controller
{
	private $stripe_key;
	private $stripe_client;
	public function __construct(){
		$is_live=false;
		if($is_live==true){
			$this->stripe_key="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";
		}else{
			$this->stripe_key="sk_test_51JF20mFlL3IzJvalqmoSp1NlGvW1umWnYp0IfN2i3gRR44vBChSsFkkSQaUjUMuG3b3r7RYpDcl9SsrVdRl48a3m00b44u01Be";	
		}
		$this->stripe_client = new \Stripe\StripeClient($this->stripe_key);
	}
    public function payment(Request $request)
    {
		$validator=$this->validate($request, [
			'card_holder_name' => 'required',
			'card_number' => 'required',
			'exp_month' => 'required',
			'exp_year' => 'required',
			'cvc' => 'required',
		]);
		
		$paymentMethods_data		=	[];
		$card_info					=	[];
		$attorney_id				= 	Auth::user()->id;
		
		$paymentMethods_data['attorney_id']		=	$attorney_id;
        $attorneypayments	=	AttorneyPayments::where('attorney_id',$attorney_id)->first();
		$attorneypayments	=	(!empty($attorneypayments)) ?$attorneypayments->toArray():[];
		// dd($request->all());
		try {
			//https://stripe.com/docs/api/payment_methods/create
			if(empty($attorneypayments['stripe_payment_method'])){
				$payment_data=	$this->stripe_client->paymentMethods->create([
								  'type' => 'card',
								  'card' => [
									'number' => $request->card_number,
									'exp_month' => $request->exp_month,
									'exp_year' => $request->exp_year,
									'cvc' => $request->cvc,
								  ],
								]);
				// echo "<pre>";print_r($payment_data->id);echo "<pre>";				
				if(!empty($payment_data->id)){
					$card_info=[];
					$card_info['attorney_id']=$attorney_id;
					$card_info['brand']=$payment_data->card->brand;
					$card_info['country']=$payment_data->card->country;
					$card_info['exp_month']=$payment_data->card->exp_month;
					$card_info['exp_year']=$payment_data->card->exp_year;
					$card_info['last4']=$payment_data->card->last4;
					$card_info['card_name']=$request->card_holder_name;
					
					
					$paymentMethods_data['stripe_payment_method']=$payment_data->id;
					$paymentMethods_data['stripe_payment_type']=$payment_data->type;
					
					$customer_data=$this->stripe_client->customers->create([
						'name'=>Auth::user()->name,			
						'email'=>Auth::user()->email,			
						'payment_method' => $payment_data->id,
					]);   
					// dd($customer_data);
					$paymentMethods_data['stripe_customer_id']=$customer_data->id;
					
					$attorneypayments_info=AttorneyPayments::create($paymentMethods_data);
					if($attorneypayments_info->id){
						AttorneyCards::create($card_info);
					}
				}
				return redirect()->route('attorney_settings')->with('success','Attorney Card has been securely registered on stripe.');
			}else{
				return redirect()->route('attorney_settings')->with('success','Attorney Card already linked with account.');
			}
		}catch(\Stripe\Error\Card $e) {
			return redirect()->back()->with('error',$e->getMessage());
		}catch (\Stripe\Error\Base $e) {
			 return redirect()->back()->with('error',$e->getMessage());
		}catch (Exception $e) {
		   return redirect()->back()->with('error',$e->getMessage());
		}	
		
    }
	public function client_application_payment(Request $request){
		//https://stripe.com/docs/payments/save-during-payment
		//https://stripe.com/docs/payments/accept-a-payment?platform=web&ui=elements
		try {			
			$payment_settings	=	AdminPaymentSettings::where('id',1)->select('discount_percentage')->first();
			$payment_settings	=	(!empty($payment_settings)) ?$payment_settings:[];
			$discount	=	(!empty($payment_settings->discount_percentage))?$payment_settings->discount_percentage:0;
			$current_time = strtotime(date('Y-m-d'));
			$expire_time = strtotime(date('Y-m-d',strtotime(Auth::user()->created_at.'+30 days')));
			if(!empty($discount) && ($expire_time>$current_time)){
				$percentage		=	($request->amount*$discount)/100;
				$amount			=	$request->amount-$percentage;
			}else{
				$amount			=	$request->amount;
			}
			$attorney_id		= 	Auth::user()->id;
			$attorneypayments	=	AttorneyPayments::where('attorney_id',$attorney_id)->first();
			$attorneypayments	=	(!empty($attorneypayments)) ?$attorneypayments->toArray():[];
			
			$subscription_info=AttorneySubscription::where(['attorney_id'=>$attorney_id,'subscribe'=>1,'type'=>1])->select('amount')->first();
			$subscription_info	=	(!empty($subscription_info)) ?$subscription_info:[];
			if(!empty($subscription_info->amount)){
				$amount=$amount+$subscription_info->amount;
			}
			if(!empty($attorneypayments['stripe_customer_id']) && !empty($attorneypayments['stripe_payment_method'])){
				
			  $paymentintent=$this->stripe_client->paymentIntents->create([
								'amount' => $amount*100,
								'currency' => 'usd',
								'customer' => $attorneypayments['stripe_customer_id'],
								'payment_method' => $attorneypayments['stripe_payment_method'],
								// 'off_session' => true,
								// 'confirm' => false,
								'capture_method' => 'manual',
							  ]);
			  // dd($paymentintent);
			  $paymentintent_data=[];
			  $paymentintent_data['client_id']=$request->client_id;
			  $paymentintent_data['attorney_id']=$attorney_id;
			  $paymentintent_data['stripe_payment_intent']=$paymentintent->id;
			  $paymentintent_data['amount']=$paymentintent->amount;
			  $paymentintent_data['customer']=$paymentintent->customer;
			  $paymentintent_data['currency']=$paymentintent->currency;
			  $paymentintent_data['payment_method']=$paymentintent->payment_method;
			  if($paymentintent->status=='requires_confirmation'){
				  $paymentintent_data['status']=$paymentintent->status;
				  $clientapplicationpayment=ClientApplicationPayment::create($paymentintent_data);
				  if($clientapplicationpayment->id){
					  $user=User::find($request->client_id);
					  $attorney=User::where('users.id',$attorney_id)->select('tbl_attorney_company.company_name','users.name')->leftJoin('tbl_attorney_company','users.id', '=', 'tbl_attorney_company.attorney_id')->first();
					  Mail::to($user['email'])->send(new WelcomeAboard($user,false,$attorney));
					 return redirect()->route('attorney_client_management')->with('success','Payment has been accomplished successfully.'); 
				  }
			  }
			}else{
				return redirect()->route('attorney_client_management')->with('error','Attorney has not register his card on payment gateway'); 
			}
		}catch (\Stripe\Error\Base $e) {
			 return redirect()->back()->with('error',$e->getMessage());
		}catch (Exception $e) {
		   return redirect()->back()->with('error',$e->getMessage());
		}
	}
	public function payment_capture(){
		try {
			$client_with_payments =  ClientApplicationPayment::where('client_id',13)->get()->toArray();
			// dd($client_with_payments);
			if(!empty($client_with_payments[0]['stripe_payment_intent'])){
				$client_with_payments=$client_with_payments[0];
				$intent_confirm=$this->stripe_client->paymentIntents->confirm(
				  $client_with_payments['stripe_payment_intent'],
				  ['payment_method' => $client_with_payments['payment_method']]
				);
				if($intent_confirm->status=='requires_capture'){
					$intent = $this->stripe_client->paymentIntents->retrieve($client_with_payments['stripe_payment_intent']);
					$data=$intent->capture(['amount_to_capture' => $client_with_payments['amount']]);
				}
				dd($data);
			}
		}catch (\Stripe\Error\Base $e) {
			 return redirect()->back()->with('error',$e->getMessage());
		}catch (Exception $e) {
		   return redirect()->back()->with('error',$e->getMessage());
		}
	}
	public function video_subscription($amount=null,$attorney_subscription_id=null){
		$attorney_id		= 	Auth::user()->id;
		$attorneypayments	=	AttorneyPayments::where('attorney_id',$attorney_id)->first();
		$attorneypayments	=	(!empty($attorneypayments)) ?$attorneypayments->toArray():[];
		try {
			if(!empty($attorneypayments['stripe_customer_id'])){
				$customer_id=$attorneypayments['stripe_customer_id'];
				$product=$this->stripe_client->products->create([
				  'name' => 'Welcome Video Subscription',
				]);
				if(!empty($product->id)){
					$price=$this->stripe_client->prices->create([
					  'unit_amount' => $amount*100,
					  'currency' => 'usd',
					  'recurring' => ['interval' => 'month'],
					  'product' => $product->id,
					]);
					if(!empty($price->id)){
						$subscriptions=$this->stripe_client->subscriptions->create([
						  'customer' => $customer_id,
						  'items' => [
							['price' => $price->id],
						  ],
						  'default_payment_method'=>$attorneypayments['stripe_payment_method'],
						]);
						if(!empty($subscriptions->id) && !empty($attorney_subscription_id)){
							AttorneySubscription::where('id',$attorney_subscription_id)->update(['stripe_subscription_id'=>$subscriptions->id]);
						}
					}
				}
			}
		}catch (\Stripe\Error\Base $e) {
			 return redirect()->back()->with('error',$e->getMessage());
		}catch (Exception $e) {
		   return redirect()->back()->with('error',$e->getMessage());
		}
	}
	public function cancel_subscription($attorney_subscription_id=null){
		try {
			$subscription_info=AttorneySubscription::where('id',$attorney_subscription_id)->select('stripe_subscription_id')->first();
			// dd($subscription_info);
			if($subscription_info->stripe_subscription_id){
				$subscriptions=$this->stripe_client->subscriptions->cancel(
				  $subscription_info->stripe_subscription_id,
				  []
				);
				if(!empty($subscriptions->id) && !empty($attorney_subscription_id)){
					AttorneySubscription::where('id',$attorney_subscription_id)->update(['stripe_subscription_id'=>""]);
				}
			}
		}catch (\Stripe\Error\Base $e) {
			 return redirect()->back()->with('error',$e->getMessage());
		}catch (Exception $e) {
		   return redirect()->back()->with('error',$e->getMessage());
		}
	}
}
