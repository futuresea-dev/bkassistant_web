<?php

namespace App\Http\Controllers;
use Auth;
use File;
use Stripe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

use App\Models\User;
use App\Models\ClientBasicInfoPartA;
use App\Models\ClientBasicInfoPartB;
use App\Models\ClientBasicInfoPartC;
use App\Models\ClientAnyOtherNameData;
use App\Models\ClientLivedAddressFrom730Data;
use App\Models\ClientBasicInfoPartRest;

/* Property Model Section */
use App\Models\ClientsPropertyResident;
use App\Models\ClientsPropertyVehicle;
use App\Models\ClientsPropertyHousehold;
use App\Models\ClientsPropertyFinancialAssets;
use App\Models\ClientsPropertyBusinessAssets;
use App\Models\ClientsPropertyFarmCommercial;
use App\Models\ClientsPropertyMiscellaneous;

/* Debts Model Section */
use App\Models\Debts;
use App\Models\DebtsTax;

/* Income Model Section */
use App\Models\IncomeDebtorEmployer;
use App\Models\IncomeDebtorSpouseEmployer;
use App\Models\IncomeDebtorMonthlyIncome;
use App\Models\IncomeDebtorSpouseMonthlyIncome;


use App\Models\Expenses;
use App\Models\SpouseExpenses;

use App\Models\FinancialAffairs;

use App\Models\FormsStepsCompleted;

use App\Models\ClientDocumentUploaded;

use App\Models\ClientApplicationPayment;

use App\Models\RetainerDocuments;
use App\Models\ClientRetainerDocuments;
use App\Models\ClientsAttorney;
use App\Models\DebtsDocuments;

use App\Models\AttorneyDocumentSelection;
use App\Models\AttorneyDocuments;
use App\Models\SignedDocuments;

use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeAboard;
use App\Mail\EditRequest;
use App\Mail\SignedDocument;

class ClientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
         return view('client.login',['client'=>true]);
    }
	public function index(Request $request){
		$input = $request->all();

        $validator=$this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(Auth::attempt(array('email' => $input['email'], 'password' => $input['password'], 'role' => User::CLIENT)))
        {
            if (auth()->user()->role == '3') {
                return redirect()->route('client_dashboard')->with('success','You are logged in.');
            }
        }else{
            return redirect()->route('client_login')->with('error','Email-Address And Password Are Wrong.');
        }
	}
	public function basic_information(){

	   // $user = [];
	   // $attorney = [];
	   // $subscription_video = [];
	   // $thumbnail_video_image = [];
	   // Mail::to('harnamsing11@gmail.com')->send('Hello');
	    // the message
        // $msg = "First line of text\nSecond line of text";

        // use wordwrap() if lines are longer than 70 characters
        // $msg = wordwrap($msg,70);

        // send email
        // mail("harnamsing11@gmail.com","My subject",$msg);

		$steps=['step1'=>true,'step2'=>false,'step3'=>false,'step4'=>false,'step5'=>false,'step6'=>false];
		$steps['tab']='tab1';
		$info=[];
		if(Auth::check()&& !empty(Auth::user()->id)){
			$client_id=Auth::user()->id;
			$info=$this->basic_information_data($client_id);
		}
		$client_with_payments	=   ClientApplicationPayment::where('client_id',Auth::user()->id)->select('client_id')->get()->pluck('client_id')->toArray();
		// dump($client_with_payments);
		$client_with_payments=(!empty($client_with_payments))?true:false;



		return view('client.dashboard',$steps)->with(['info'=>$info,'client_with_payments'=>$client_with_payments]);
	}
	public function basic_information_data($client_id){
		$BasicInfoPartA				=	ClientBasicInfoPartA::where('client_id',$client_id)->first();
		$BasicInfo_AnyOtherName		=	ClientAnyOtherNameData::where('client_id',$client_id)->first();
		$BasicInfo_AddressFrom730	=	ClientLivedAddressFrom730Data::where('client_id',$client_id)->first();
		$BasicInfo_PartB			=	ClientBasicInfoPartB::where('client_id',$client_id)->first();
		$BasicInfo_PartC			=	ClientBasicInfoPartC::where('client_id',$client_id)->first();

		$BasicInfo_PartD			=	ClientBasicInfoPartC::where('client_id',$client_id)->first();

		$BasicInfo_PartRest			=	ClientBasicInfoPartRest::where('client_id',$client_id)->first();

		$BasicInfo_PartRestD			=	ClientBasicInfoPartRest::where('client_id',$client_id)->first();

		$final_BasicInfo_PartC=[];

		if(!empty($BasicInfo_PartC)){
			foreach($BasicInfo_PartC->toArray() as $k=>$v){
				if(is_array(json_decode($v,1))){
					$adata[$k]=json_decode($v,1);
					$final_BasicInfo_PartC[$k]=$adata[$k];
				}else{
					$final_BasicInfo_PartC[$k]=$v;
				}
			}
		}

		/*if(!empty($BasicInfo_PartC)){
			foreach($BasicInfo_PartC->toArray() as $k=>$v){
				if(is_array(json_decode($v,1))){
					$data[$k]=json_decode($v,1);
					if(!empty($data[$k])){
						foreach($data[$k] as $kkey=>$vv){
							$final_BasicInfo_PartC[$kkey]=$vv;
						}
					}
				}else{
					$final_BasicInfo_PartC[$k]=$v;
				}
			}
		}*/

		$final_BasicInfo_PartD = [];
		if(!empty($BasicInfo_PartD)){
			foreach($BasicInfo_PartD->toArray() as $k=>$v){
				if(is_array(json_decode($v,1))){
					$data[$k]=json_decode($v,1);
					if(!empty($data[$k])){
						foreach($data[$k] as $kkey=>$vv){
							$final_BasicInfo_PartD[$kkey]=$vv;
						}
					}
				}else{
					$final_BasicInfo_PartD[$k]=$v;
				}
			}
		}

		$final_BasicInfo_PartRestD = [];
		if(!empty($BasicInfo_PartRestD)){
			foreach($BasicInfo_PartRestD->toArray() as $k=>$v){
				if(is_array(json_decode($v,1))){
					$data[$k]=json_decode($v,1);
					if(!empty($data[$k])){
						foreach($data[$k] as $kkey=>$vv){
							$final_BasicInfo_PartRestD[$kkey]=$vv;
						}
					}
				}else{
					$final_BasicInfo_PartRestD[$k]=$v;
				}
			}
		}


		$final_BasicInfo_AnyOtherName=[];
		if(!empty($BasicInfo_AnyOtherName)){
			foreach($BasicInfo_AnyOtherName->toArray() as $k=>$v){
				if(is_array(json_decode($v,1))){
					$adata[$k]=json_decode($v,1);
					$final_BasicInfo_AnyOtherName[$k]=$adata[$k];
				}else{
					$final_BasicInfo_AnyOtherName[$k]=$v;
				}
			}
		}
		$final_BasicInfo_PartB=[];
		if(!empty($BasicInfo_PartB)){
			foreach($BasicInfo_PartB->toArray() as $k=>$v){
				if(is_array(json_decode($v,1))){
					$adata[$k]=json_decode($v,1);
					$final_BasicInfo_PartB[$k]=$adata[$k];
				}else{
					$final_BasicInfo_PartB[$k]=$v;
				}
			}
		}
		// dd($final_BasicInfo_AnyOtherName);
		$info=['BasicInfoPartA'=>$BasicInfoPartA,'BasicInfo_AnyOtherName'=>$final_BasicInfo_AnyOtherName,'BasicInfo_AddressFrom730'=>$BasicInfo_AddressFrom730,'BasicInfoPartB'=>$final_BasicInfo_PartB,'BasicInfo_PartC'=>$final_BasicInfo_PartC,'BasicInfo_PartD'=>$final_BasicInfo_PartD,'BasicInfo_PartRest'=>$BasicInfo_PartRest,'BasicInfo_PartRestD'=>$final_BasicInfo_PartRestD];
		return $info;
	}

    public function basic_info_step1(Request $request)
    {
        if ($request->isMethod('post')) {
            $input = $request->all();
            $part1 = [];
            $mailing_address = !empty($input['part1']['lived_address_from_730']['mailing_address']) ? $input['part1']['lived_address_from_730']['mailing_address'] : "";
            $lived_address_from_730 = !empty($input['part1']['lived_address_from_730']) ? $input['part1']['lived_address_from_730'] : "";
            $any_other_name = !empty($input['part1']['any_other_name']) ? $input['part1']['any_other_name'] : "";

            if (!empty($any_other_name['past_eight']) && array_filter($any_other_name)) {
                $part1['any_other_name'] = 1;
            } else {
                $part1['any_other_name'] = 0;
            }
            if (!empty($lived_address_from_730['lived_atleast']) && array_filter($lived_address_from_730)) {
                $part1['lived_address_from_730'] = 1;
                unset($lived_address_from_730['lived_atleast']);
            } else {
                $part1['lived_address_from_730'] = 0;
                if (isset($lived_address_from_730['lived_atleast'])) {
                    unset($lived_address_from_730['lived_atleast']);
                }
            }

            $part1['client_id']            = Auth::user()->id;
            $part1['name']                = !empty($input['part1']['name']) ? $input['part1']['name'] : "";
            $part1['middle_name']        = !empty($input['part1']['middle_name']) ? $input['part1']['middle_name'] : "";
            $part1['last_name']            = !empty($input['part1']['last_name']) ? $input['part1']['last_name'] : "";
            $part1['has_security_number']    = !empty($input['part1']['has_security_number']) ? $input['part1']['has_security_number'] : 0;
            $part1['security_number']    = !empty($input['part1']['security_number']) ? $input['part1']['security_number'] : "";
            // $part1['license_number']	= !empty($input['part1']['license_number'])?$input['part1']['license_number']:"";
            // $part1['expiration_date']	= !empty($input['part1']['expiration_date'])?date('Y-m-d',strtotime($input['part1']['expiration_date'])):" ";
            $part1['state']                = !empty($input['part1']['state']) ? $input['part1']['state'] : "";
            $part1['itin']                = !empty($input['part1']['itin']) ? $input['part1']['itin'] : "";
            $part1['date_of_birth']        = !empty($input['part1']['date_of_birth']) ? date('Y-m-d', strtotime($input['part1']['date_of_birth'])) : date('Y-m-d');
            $part1['Address']            = !empty($input['part1']['Address']) ? $input['part1']['Address'] : "";
            $part1['City']                = !empty($input['part1']['City']) ? $input['part1']['City'] : "";
            $part1['zip']                = !empty($input['part1']['zip']) ? $input['part1']['zip'] : "";
            $part1['country']            = !empty($input['part1']['country']) ? $input['part1']['country'] : "";
            $part1['lived_address_from_180'] = !empty($input['part1']['lived_address_from_180']) ? 1 : 0;
            $part1['marital_status']    = !empty($input['part1']['marital_status']) ? $input['part1']['marital_status'] : 0;
            $part1['status']            = 1;

            if (!empty($input['basicinfo_parta_id'])) {
                ClientBasicInfoPartA::where("id", $input['basicinfo_parta_id'])->update($part1);
            } else {
                ClientBasicInfoPartA::create($part1);
            }
            if (!empty($any_other_name) && array_filter($any_other_name)) {
                $any_other_data = [];
                unset($input['part1']['any_other_name']['past_eight']);
                $any_other_data['client_id']    = Auth::user()->id;
                $any_other_data['name']            = !empty($input['part1']['any_other_name']['name']) ? json_encode($input['part1']['any_other_name']['name']) : "";
                $any_other_data['middle_name']            = !empty($input['part1']['any_other_name']['middle_name']) ? json_encode($input['part1']['any_other_name']['middle_name']) : "";
                $any_other_data['last_name']            = !empty($input['part1']['any_other_name']['last_name']) ? json_encode($input['part1']['any_other_name']['last_name']) : "";
                $any_other_data['home']            = !empty($input['part1']['any_other_name']['home']) ? $input['part1']['any_other_name']['home'] : "";
                $any_other_data['work']            = !empty($input['part1']['any_other_name']['work']) ? $input['part1']['any_other_name']['work'] : "";
                $any_other_data['cell']            = !empty($input['part1']['any_other_name']['cell']) ? $input['part1']['any_other_name']['cell'] : "";
                $any_other_data['email']        = !empty($input['part1']['any_other_name']['email']) ? $input['part1']['any_other_name']['email'] : "";
                if (!empty($input['basicinfo_anyothername_id'])) {
                    ClientAnyOtherNameData::where("id", $input['basicinfo_anyothername_id'])->update($any_other_data);
                } else {
                    ClientAnyOtherNameData::create($any_other_data);
                }
            }

            $lived_address_730_data = [];

            if (!empty($lived_address_from_730) && array_filter($lived_address_from_730)) {
                $lived_address_730_data['client_id']    = Auth::user()->id;
                $lived_address_730_data['Address'] = !empty($input['part1']['lived_address_from_730']['Address']) ? $input['part1']['lived_address_from_730']['Address'] : "";
                $lived_address_730_data['City'] = !empty($input['part1']['lived_address_from_730']['City']) ? $input['part1']['lived_address_from_730']['City'] : "";
                $lived_address_730_data['County'] = $input['part1']['lived_address_from_730']['County'] ?? "";
                $lived_address_730_data['State'] = !empty($input['part1']['lived_address_from_730']['State']) ? $input['part1']['lived_address_from_730']['State'] : "";
                $lived_address_730_data['Zip'] = !empty($input['part1']['lived_address_from_730']['Zip']) ? $input['part1']['lived_address_from_730']['Zip'] : "";

                if (!empty($input['basicinfo_addressfrom730_id'])) {
                    ClientLivedAddressFrom730Data::where("id", $input['basicinfo_addressfrom730_id'])->update($lived_address_730_data);
                } else {
                    ClientLivedAddressFrom730Data::create($lived_address_730_data);
                }
            }
        }
        $client_id = Auth::user()->id;

        $part1_info    =    ClientBasicInfoPartA::where('client_id', $client_id)->select('marital_status')->first();
        $step2 = (!empty($part1_info['marital_status']) && in_array($part1_info['marital_status'], ['1', '5'])) ? false : true;
        $step3 = (!empty($part1_info['marital_status']) && in_array($part1_info['marital_status'], ['1', '5'])) ? true : false;
        $steps = ['step1' => false, 'step2' => $step2, 'step3' => $step3, 'step4' => false, 'step5' => false, 'step6' => false];
        $steps['tab'] = 'tab1';
        $redirect = false;
        if (!empty($part1_info['marital_status']) && in_array($part1_info['marital_status'], ['1', '5'])) {
            $redirect = true;
        }
        $info = $this->basic_information_data($client_id);
		
        //if ($request->isMethod('post'))
        Session::flash('success', 'Information has been saved successfully');
        return view('client.dashboard', $steps)->with(['info' => $info])->with('redirect', $redirect);
    }

	public function basic_info_step2(Request $request){
		if ($request->isMethod('post')) {
			$input = $request->all();
			// dd($input);
			$part2=[];

			$part2['client_id']			= Auth::user()->id;
			$part2['name']				= !empty($input['part2']['name'])?$input['part2']['name']:"";
			$part2['middle_name']		= !empty($input['part2']['middle_name'])?$input['part2']['middle_name']:"";
			$part2['last_name']			= !empty($input['part2']['last_name'])?$input['part2']['last_name']:"";
			$part2['has_security_number']	= !empty($input['part2']['has_security_number'])?$input['part2']['has_security_number']:0;
			$part2['spouse_any_other_name']=!empty($input['part2']['spouse_any_other_name'])?1:0;

			$part2['spouse_other_name']	= !empty($input['part2']['spouse_other_name'])?json_encode($input['part2']['spouse_other_name']):"";
			$part2['spouse_other_middle_name']	= !empty($input['part2']['spouse_other_middle_name'])?json_encode($input['part2']['spouse_other_middle_name']):"";
			$part2['spouse_other_last_name']	= !empty($input['part2']['spouse_other_last_name'])?json_encode($input['part2']['spouse_other_last_name']):"";

			$part2['spouse_has_ein']=!empty($input['part2']['spouse_has_ein'])?1:0;
			$part2['social_security_number']	= !empty($input['part2']['social_security_number'])?$input['part2']['social_security_number']:"";
			$part2['state']				= !empty($input['part2']['state'])?$input['part2']['state']:"";
			$part2['date_of_birth']		= !empty($input['part2']['date_of_birth'])?date('Y-m-d',strtotime($input['part2']['date_of_birth'])):date('Y-m-d');
			$part2['itin']				= !empty($input['part2']['itin'])?$input['part2']['itin']:"";
			$part2['Address']			= !empty($input['part2']['Address'])?$input['part2']['Address']:"";
			$part2['country']			= !empty($input['part2']['country'])?$input['part2']['country']:"";
			$part2['City']				= !empty($input['part2']['City'])?$input['part2']['City']:"";
			$part2['zip']				= !empty($input['part2']['zip'])?$input['part2']['zip']:"";
			$part2['lived_address_from_180']=!empty($input['part2']['lived_address_from_180'])?1:0;
			$part2['lived_address_from_730']=!empty($input['part2']['lived_address_from_730'])?1:0;
			$part2['spouse_different_address']=!empty($input['part2']['spouse_different_address'])?1:0;
			$part2['spouse_different_address_info']=!empty($input['part2']['spouse_different_address_info'])?$input['part2']['spouse_different_address_info']:"";
			$part2['marital_status']	= !empty($input['part2']['marital_status'])?1:0;
			$part2['status']			= 1;



			if(!empty($input['basicinfo_partb_id'])){
				ClientBasicInfoPartB::where("id", $input['basicinfo_partb_id'])->update($part2);
				$insertedId=true;
			}else{
				$part2_info=ClientBasicInfoPartB::create($part2);
				$insertedId= $part2_info->id;
			}
		}
		$part1_info	=	ClientBasicInfoPartA::where('client_id',Auth::user()->id)->select('marital_status')->first();
		$redirect=false;
		if(!empty($part1_info['marital_status']) && in_array($part1_info['marital_status'],['1','5'])){
			$redirect=true;
		}
		$steps=['step1'=>false,'step2'=>false,'step3'=>true,'step4'=>false,'step5'=>false,'step6'=>false];
		$steps['tab']='tab1';
		$client_id=Auth::user()->id;
		$info=$this->basic_information_data($client_id);
		if ($request->isMethod('post'))
			Session::flash('success', 'Information has been saved successfully');
		return view('client.dashboard',$steps)->with(['info'=>$info])->with('redirect',$redirect);
	}
	public function basic_info_step3(Request $request){
		if ($request->isMethod('post')) {
			$input  = $request->all();
			$part3	= [];
			$part3['client_id']			= Auth::user()->id;
			$part3['filed_bankruptcy_case_last_8years']	= !empty($input['part3']['filed_bankruptcy_case_last_8years'])?1:0;
			$part3['any_bankruptcy_cases_pending']	= !empty($input['part3']['any_bankruptcy_cases_pending'])?1:0;
			$part3['bankruptcy_filed_before']	= !empty($input['part3']['bankruptcy_filed_before'])?1:0;

			$part3['status']			= 1;
			if(!empty($part3['filed_bankruptcy_case_last_8years'])){

				$part3['case_filed_state']	= !empty($input['part3']['case_filed_state'])?json_encode($input['part3']['case_filed_state']):"";

				$part3['case_number']	= !empty($input['part3']['case_number'])?json_encode($input['part3']['case_number']):"";


				$part3['date_filed']	= !empty($input['part3']['date_filed'])?json_encode($input['part3']['date_filed']):"";

				$part3['date_discharge']	= !empty($input['part3']['date_discharge'])?json_encode($input['part3']['date_discharge']):"";

				$part3['is_case_dismissed']	= !empty($input['part3']['is_case_dismissed'])?json_encode($input['part3']['is_case_dismissed']):"0";

				$part3['dismissed_date']	= !empty($input['part3']['dismissed_date'])?json_encode($input['part3']['dismissed_date']):"";



			}else{

				$part3['case_filed_state']="";
				$part3['case_number'] = '';
				$part3['date_filed'] = '';
				$part3['date_discharge'] = '';
				$part3['is_case_dismissed'] = '';
				$part3['dismissed_date'] = '';
			}

			$part3['filed_bankruptcy_case_last_8years_data'] = '';


			if(!empty($input['part3']['any_bankruptcy_cases_pending_data']) && !empty($part3['any_bankruptcy_cases_pending'])){
				$part3['any_bankruptcy_cases_pending_data']=json_encode($input['part3']['any_bankruptcy_cases_pending_data']);
			}else{
				$part3['any_bankruptcy_cases_pending_data']="";
			}

			if(!empty($input['part3']['any_bankruptcy_filed_before_data']) && !empty($part3['bankruptcy_filed_before'])){
				$part3['any_bankruptcy_filed_before_data']=json_encode($input['part3']['any_bankruptcy_filed_before_data']);
			}else{
				$part3['any_bankruptcy_filed_before_data']="";
			}

			if(!empty($input['basicinfo_partc_id'])){
				ClientBasicInfoPartC::where("id", $input['basicinfo_partc_id'])->update($part3);
				$insertedId=true;
			}else{
				$part3_info=ClientBasicInfoPartC::create($part3);
				$insertedId= $part3_info->id;
			}
		}

		$client_id=Auth::user()->id;
		$info=$this->basic_information_data($client_id);
		if ($request->isMethod('post'))
		Session::flash('success', 'Information has been saved successfully');
//dd($info);
		$steps=['step1'=>false,'step2'=>false,'step3'=>false,'step4'=>true,'step5'=>false,'step6'=>false];
		$steps['tab']='tab1';
		return view('client.dashboard',$steps)->with(['info'=>$info]);
		// dd($input);
	}
	public function basic_info_step4(Request $request){
		if ($request->isMethod('post')) {
			$input = $request->all();
			// dd($input);
			$part4	= [];
			$part4['client_id']			= Auth::user()->id;
			$eviction_pending_data=!empty($input['eviction_pending_data'])?$input['eviction_pending_data']:"";
			$part4['eviction_pending']	= !empty($input['part_rest']['eviction_pending'])?1:0;
			if(!empty($eviction_pending_data) && array_filter($eviction_pending_data)){
				$part4['eviction_pending_data']=json_encode($eviction_pending_data);
			}
			$used_business_ein_data=!empty($input['used_business_ein_data'])?$input['used_business_ein_data']:"";
			$part4['used_business_ein']	= !empty($input['part_rest']['used_business_ein'])?1:0;
			if(!empty($used_business_ein_data) && array_filter($used_business_ein_data)){
				$part4['used_business_ein_data']=json_encode($used_business_ein_data);
			}
			$part4['status']			= 1;
			if(!empty($input['basicinfo_partrest_id'])){
				ClientBasicInfoPartRest::where("id", $input['basicinfo_partrest_id'])->update($part4);
				$insertedId=$input['basicinfo_partrest_id'];
			}else{
				$part4_info	=	ClientBasicInfoPartRest::create($part4);
				$insertedId= $part4_info->id;
			}
			session(['client_basic_rest_id' => $insertedId]);
		}
		$steps=['step1'=>false,'step2'=>false,'step3'=>false,'step4'=>false,'step5'=>true,'step6'=>false];
		$steps['tab']='tab1';

		$client_id=Auth::user()->id;
		$info=$this->basic_information_data($client_id);
		if ($request->isMethod('post'))
		Session::flash('success', 'Information has been saved successfully');

		return view('client.dashboard',$steps)->with(['info'=>$info]);
	}
	public function basic_info_step5(Request $request){
		$input = $request->all();

		$part5['sole_proprietor']	= !empty($input['part_rest']['sole_proprietor'])?1:0;
		$part5['proprietor_status']	= !empty($input['part_rest']['proprietor_status'])?1:0;

		$id=(!empty($input['basicinfo_partrest_id']))?$input['basicinfo_partrest_id']:session('client_basic_rest_id');

		if(!empty($input['part_rest']['any_proprietor_status_data']) && !empty($part5['proprietor_status'])){
			$part5['any_proprietor_status_data']=json_encode($input['part_rest']['any_proprietor_status_data']);
		}else{
			$part5['any_proprietor_status_data']="";
		}



		$part5_info	=	ClientBasicInfoPartRest::where('id', $id)->update($part5);
		$steps=['step1'=>false,'step2'=>false,'step3'=>false,'step4'=>false,'step5'=>false,'step6'=>true];
		$steps['tab']='tab1';



		$client_id=Auth::user()->id;
		$info=$this->basic_information_data($client_id);
		Session::flash('success', 'Information has been saved successfully');

		return view('client.dashboard',$steps)->with(['info'=>$info]);

		// dd($input);
	}
	public function basic_info_step6(Request $request){
		$input = $request->all();

		$part6['hazardous_property']	= !empty($input['part_rest']['hazardous_property'])?1:0;

		$id=(!empty($input['basicinfo_partrest_id']))?$input['basicinfo_partrest_id']:session('client_basic_rest_id');
		$part6_info	=	ClientBasicInfoPartRest::where('id', $id)->update($part6);
		$client_id=Auth::user()->id;
		FormsStepsCompleted::updateOrCreate(["client_id"=>$client_id],['step1'=>1]);
		return redirect()->route('property_information')->with('success','Information has been saved successfully');
	}

	public function property_information(){
		$steps=['step1'=>true,'step2'=>false,'step3'=>false,'step4'=>false,'step5'=>false,'step6'=>false,'step7'=>false];
		$steps['tab']='tab2';
		$resident=[];
		if(Auth::check()&& !empty(Auth::user()->id)){
			$client_id=Auth::user()->id;
			$resident=$this->property_information_data($client_id);
		}
		return view('client.dashboard',$steps)->with(['resident'=>$resident]);
	}

	public function property_information_data($client_id){
		$propertyresident	=	ClientsPropertyResident::where('client_id',$client_id)->get();
		$propertyvehicle	=	ClientsPropertyVehicle::where('client_id',$client_id)->get();
		$propertyhousehold	=	ClientsPropertyHousehold::where('client_id',$client_id)->get()->toArray();
		$financialassets	=	ClientsPropertyFinancialAssets::where('client_id',$client_id)->get()->toArray();
        $isBusinessProperty	=	ClientsPropertyBusinessAssets::where('client_id',$client_id)->where('type', 'is_business_property')->first();
		$businessassets		=	ClientsPropertyBusinessAssets::where('client_id',$client_id)->get()->toArray();
        $isFarmProperty	    =	ClientsPropertyFarmCommercial::where('client_id',$client_id)->where('type', 'is_farm_property')->first();
		$farmcommercial		=	ClientsPropertyFarmCommercial::where('client_id',$client_id)->get()->toArray();
		$miscellaneous		=	ClientsPropertyMiscellaneous::where('client_id',$client_id)->get()->toArray();

        $resident = ['propertyresident' => $propertyresident, 'propertyvehicle' => $propertyvehicle, 'propertyhousehold' => $propertyhousehold, 
            'financialassets' => $financialassets, 'isBusinessProperty' => $isBusinessProperty, 'businessassets' => $businessassets,
            'isFarmProperty' => $isFarmProperty, 'farmcommercial' => $farmcommercial, 'miscellaneous' => $miscellaneous];
		return $resident;
	}
	public function client_property_step1(Request $request){
		if ($request->isMethod('post')) {
            $input = $request->all();
			$propertyFinal=[];
			if(!empty($input['property_resident'])){
				foreach($input['property_resident'] as $key=>$values){
					$i=0;
					if($key=="home_car_loan"){
						continue;
					}
					foreach($values as $val){
						$propertyFinal[$i][$key]=$val;
						$i++;
					}
				}
			}
			$home_car_loan_final=[];
			if(!empty($input['property_resident']['home_car_loan'])){
				foreach($input['property_resident']['home_car_loan'] as $key=>$values){
					$i=0;
					foreach($values as $val){
						$home_car_loan_final[$i][$key]=(isset($val))?$val:"";
						$propertyFinal[$i]['home_car_loan']=json_encode($home_car_loan_final[$i]);
						$i++;
					}
				}
			}
			if(!empty($propertyFinal)){
				foreach($propertyFinal as $val){
					$val['client_id']=Auth::user()->id;
                    // ClientsPropertyResident::updateOrCreate($val);
					if(!empty($val['id'])){
						$id=$val['id'];
						
						if($val['currently_lived'] == 0){
							ClientsPropertyResident::where('id',$id)->delete();
						}
						unset($val['id']);
					
						ClientsPropertyResident::where("id", $id)->update($val);
					}else{
						
						$part2_info=ClientsPropertyResident::create($val);
					}
				}
			}
		}
		$steps=['step1'=>false,'step2'=>true,'step3'=>false,'step4'=>false,'step5'=>false,'step6'=>false,'step7'=>false];
		$steps['tab']='tab2';
		$client_id=Auth::user()->id;
		$resident=$this->property_information_data($client_id);

		return view('client.dashboard',$steps)->with(['resident'=>$resident]);

	}
	public function client_property_step2(Request $request){
		if ($request->isMethod('post')) {
		  //  echo'<pre>';print_r($request->all());die;
			$input = $request->all();
			// dump($input);
			$propery_vehicle_final=[];
			if(!empty($input['property_vehicle'])){
				foreach($input['property_vehicle'] as $key=>$values){
					$i=0;
					if($key=="vehicle_car_loan"){
						continue;
					}
					foreach($values as $val){
						$propery_vehicle_final[$i][$key]=(isset($val))?$val:"";
						$i++;
					}
				}
			}
			$vehicle_car_loan_final=[];
			if(!empty($input['property_vehicle']['vehicle_car_loan'])){
				foreach($input['property_vehicle']['vehicle_car_loan'] as $key=>$values){
					$i=0;
					foreach($values as $val){
						$vehicle_car_loan_final[$i][$key]=(isset($val))?$val:"";
						$propery_vehicle_final[$i]['vehicle_car_loan']=json_encode($vehicle_car_loan_final[$i]);
						$i++;
					}
				}

			}
			//dd($propery_vehicle_final);
			if(isset($propery_vehicle_final)){
				foreach($propery_vehicle_final as $val){
                    // FrontEnd is sending one extra, temp fix to stop adding one extra every time.
                    if(array_key_exists('own_any_property', $val)) {
                        $val['client_id']=Auth::user()->id;
                        if(!empty($val['id'])){
                            $id=$val['id'];
							if($val['own_any_property'] == 0){
								ClientsPropertyVehicle::where("id", $id)->delete();
							}
                            unset($val['id']);
							ClientsPropertyVehicle::where("id", $id)->update($val);
                            $insertedId=true;
                        }else{
                            $part2_info=ClientsPropertyVehicle::create($val);
                        }
                    }
				}
			}
		}
		$steps=['step1'=>false,'step2'=>false,'step3'=>true,'step4'=>false,'step5'=>false,'step6'=>false,'step7'=>false];
		$steps['tab']='tab2';
		$client_id=Auth::user()->id;
		$resident=$this->property_information_data($client_id);
		return view('client.dashboard',$steps)->with(['resident'=>$resident]);

	}

	public function client_property_step3(Request $request){
		if ($request->isMethod('post')) {
			$input = $request->except('_token');
            if(!empty($input)){
				foreach($input as $val){
					$val['client_id']=Auth::user()->id;
					$val['type_data']=(!empty($val['type_value']) && $val['type_value']==1)?json_encode($val['data']):"";
					unset($val['data']);

                    if(!empty($val['id'])){
						$id=$val['id'];
						unset($val['id']);
						ClientsPropertyHousehold::where("id", $id)->update($val);
						$insertedId=true;
					}else{
						$part2_info=ClientsPropertyHousehold::create($val);
					}
				}
			}
		}
		$steps=['step1'=>false,'step2'=>false,'step3'=>false,'step4'=>true,'step5'=>false,'step6'=>false,'step7'=>false];
		$steps['tab']='tab2';
		$client_id=Auth::user()->id;
		$resident=$this->property_information_data($client_id);
		return view('client.dashboard',$steps)->with(['resident'=>$resident]);
	}

	public function client_property_step4(Request $request){
		if ($request->isMethod('post')) {
			$input = $request->except('_token');
            if(!empty($input)){
				foreach($input as $key => $val){
					$val['client_id']=Auth::user()->id;
                    if ($key == 'is_business_property' || $key == 'is_farm_property') {
                        // Boolean fields with no data to skip step 4 & 5
                        $model = ($key == 'is_business_property') ? ClientsPropertyBusinessAssets::class : ClientsPropertyFarmCommercial::class;
                        $model::updateOrCreate(
                            [ 'client_id' => $val['client_id'] ],
                            [ 'type' => $key, 'type_value' => $val['type_value'], 'type_data' => '' ]
                        );
                    } else {
                        $val['type_data'] = (!empty($val['type_value']) && $val['type_value'] == 1) ? json_encode($val['data']) : "";
                        unset($val['data']);
                        if(!empty($val['id'])){
                            $id=$val['id'];
                            unset($val['id']);
                            ClientsPropertyFinancialAssets::where("id", $id)->update($val);
                        }else{
                            ClientsPropertyFinancialAssets::create($val);
                        }
                    }
				}
			}
		}
		$steps=['step1'=>false,'step2'=>false,'step3'=>false,'step4'=>false,'step5'=>false,'step6'=>false,'step7'=>false];
		$steps['tab']='tab2';
		$client_id=Auth::user()->id;
		$resident = $this->property_information_data($client_id);
		if($resident['isBusinessProperty']['type_value']) {
			$steps['step5'] = true;
        } else if($resident['isFarmProperty']['type_value']){
		    $steps['step6'] = true;
        } else {
			$steps['step7'] = true;
        }
		return view('client.dashboard',$steps)->with(['resident'=>$resident]);
	}

	public function client_property_step5(Request $request){
		if ($request->isMethod('post')) {
			$input = $request->except('_token', 'Description');
			if(!empty($input)){
				foreach($input as $val){
					$val['client_id']=Auth::user()->id;
					$val['type_data']=(!empty($val['type_value']) && $val['type_value']==1)?json_encode($val['data']):"";
					unset($val['data']);
					if(!empty($val['id'])){
						$id=$val['id'];
						unset($val['id']);
						ClientsPropertyBusinessAssets::where("id", $id)->update($val);
					}else{
						ClientsPropertyBusinessAssets::create($val);
					}
				}
			}
		}
		$steps=['step1'=>false,'step2'=>false,'step3'=>false,'step4'=>false,'step5'=>false,'step6'=>false,'step7'=>false];
		$steps['tab']='tab2';
		$client_id=Auth::user()->id;
		$resident=$this->property_information_data($client_id);

        if($resident['isFarmProperty']['type_value']){
            $steps['step6'] = true;
        } else {
            $steps['step7'] = true;
        }

		return view('client.dashboard',$steps)->with(['resident'=>$resident]);
	}

	public function client_property_step6(Request $request){
		if ($request->isMethod('post')) {
			$input = $request->all();
			if(!empty($input)){
				unset($input['_token']);
				foreach($input as $val){
					$val['client_id']=Auth::user()->id;
					$val['type_data']=(!empty($val['type_value']) && $val['type_value']==1)?json_encode($val['data']):"";
					unset($val['data']);
					if(!empty($val['id'])){
						// echo "<pre>";print_r($val);echo "<pre>";continue;
						$id=$val['id'];
						unset($val['id']);
						ClientsPropertyFarmCommercial::where("id", $id)->update($val);
						$insertedId=true;
					}else{
						$part2_info=ClientsPropertyFarmCommercial::create($val);
					}
				}
			}
		}
		$steps=['step1'=>false,'step2'=>false,'step3'=>false,'step4'=>false,'step5'=>false,'step6'=>false,'step7'=>true];
		$steps['tab']='tab2';
		$client_id=Auth::user()->id;
		$resident=$this->property_information_data($client_id);
		return view('client.dashboard',$steps)->with(['resident'=>$resident]);
	}
	public function client_property_step7(Request $request){
		if ($request->isMethod('post')) {
			$input = $request->all();
			// dd($input);
			if(!empty($input)){
				unset($input['_token']);
				unset($input['Description']);
				foreach($input as $val){
					$val['client_id']=Auth::user()->id;
					$val['type_data']=(!empty($val['type_value']) && $val['type_value']==1)?json_encode($val['data']):"";
					unset($val['data']);
					// dd($val);
					if(!empty($val['id'])){
						$id=$val['id'];
						unset($val['id']);
						ClientsPropertyMiscellaneous::where("id", $id)->update($val);
						$insertedId=true;
					}else{
						$part2_info=ClientsPropertyMiscellaneous::create($val);
					}
				}
			}
		}
		// $steps=['step1'=>true,'step2'=>false,'step3'=>false,'step4'=>false,'step5'=>false,'step6'=>false,'step7'=>false];
		// $steps['tab']='tab3';
		// $resident=$this->property_information_data($client_id);
		// return view('client.dashboard',$steps)->with(['resident'=>$resident]);
		$client_id=Auth::user()->id;
		FormsStepsCompleted::updateOrCreate(["client_id"=>$client_id],['step2'=>1]);
		return redirect()->route('client_debts_step2')->with('success','Information has been saved successfully');
	}
	public function client_debts(Request $request){
		$client_id		=	Auth::user()->id;
		$check_rented=ClientsPropertyResident::where("client_id", $client_id)->select('currently_lived')->first();
		if(isset($check_rented->currently_lived) && $check_rented->currently_lived==0){ //skipping first step if option is rent on proprty tab
			return redirect()->route('client_debts_step2');
		}
		if ($request->isMethod('post')) {
			$input = $request->all();
			// dd($input);
			if(!empty($input)){
				unset($input['_token']);
				$input['client_id']=Auth::user()->id;
				$input['debt_incurred_date']=date('Y-m-d',strtotime($input['debt_incurred_date']));
				if(!empty($input['id'])){
					$id=$input['id'];
					unset($input['id']);
					Debts::where("id", $id)->update($input);
					$insertedId=true;
				}else{
					$part2_info=Debts::create($input);
				}
				$client_id=Auth::user()->id;
				FormsStepsCompleted::updateOrCreate(["client_id"=>$client_id],['step3'=>1]);
				return redirect()->route('client_debts_step2')->with('success','Information has been saved successfully');
			}
		}
		$debts	=	Debts::where('client_id',$client_id)->first();
		if (!empty($debts)) {
			$debts = $debts->toArray();
		}else{
			$debts=[];
		}
		$steps['tab']='tab3';
		$steps['step']='step1';
		return view('client.dashboard',$steps)->with(['debts'=>$debts]);;
	}
	public function client_debts_step2(Request $request){
		$client_id=Auth::user()->id;
		if ($request->isMethod('post')) {
			$input = $request->all();
			// dd($input);
			if(!empty($input)){
				unset($input['_token']);
				$final_input=[];
				foreach($input as $k=>$v){
					if(is_array($v)){
						$final_input[$k]=json_encode($v);
					}else{
						$final_input[$k]=$v;
					}
				}
				$final_input['client_id']=Auth::user()->id;
				if(!empty($final_input['id'])){
					$id=$final_input['id'];
					unset($final_input['id']);
					DebtsTax::where("id", $id)->update($final_input);
					$insertedId=true;
				}else{
					$part2_info=DebtsTax::create($final_input);
				}
				$client_id=Auth::user()->id;
				FormsStepsCompleted::updateOrCreate(["client_id"=>$client_id],['step3'=>1]);
				return redirect()->route('client_income')->with('success','Information has been saved successfully');
			}
		}
		$debtstax			=	DebtsTax::where('client_id',$client_id)->first();
		$debtstax			=	(!empty($debtstax))?$debtstax->toArray():[];
		$final_debtstax		=	[];
		if(!empty($debtstax)){
			foreach($debtstax as $k=>$v){
				if(is_array(json_decode($v,1))){
					$final_debtstax[$k]=json_decode($v,1);
				}else{
					$final_debtstax[$k]=$v;
				}
			}
		}
		// dump($final_debtstax);
		$steps['tab']='tab3';
		$steps['step']='step2';
		$debts_documents=DebtsDocuments::where('client_id',$client_id)->get();
		//dd($debts_documents);
		return view('client.dashboard',$steps)->with(['debts'=>$final_debtstax,'debts_documents'=>$debts_documents]);
	}
	public function client_income(Request $request){
		$client_id		=	Auth::user()->id;
		$steps=['step1'=>true,'step2'=>false,'step3'=>false,'step4'=>false];
		$steps['tab']='tab4';
		$client_id=Auth::user()->id;
		$check_marital_status=ClientBasicInfoPartA::where("client_id", $client_id)->select('marital_status')->first();
		$redirect=false;
		if(!empty($check_marital_status->marital_status) && in_array($check_marital_status->marital_status,['1','5'])){
			$redirect=true;
		}
		$income=$this->income_information_data($client_id);
		return view('client.dashboard',$steps)->with(['income'=>$income,'redirect'=>$redirect]);;
	}
	public function income_information_data($client_id){
		$incomedebtoremployer			=	IncomeDebtorEmployer::where('client_id',$client_id)->first();
		$incomedebtoremployer			=	(!empty($incomedebtoremployer))?$incomedebtoremployer->toArray():[];

		$debtorspouseemployer			=	IncomeDebtorSpouseEmployer::where('client_id',$client_id)->first();
		$debtorspouseemployer			=	(!empty($debtorspouseemployer))?$debtorspouseemployer->toArray():[];

		$debtormonthlyincome			=	IncomeDebtorMonthlyIncome::where('client_id',$client_id)->first();
		$debtormonthlyincome			=	(!empty($debtormonthlyincome))?$debtormonthlyincome->toArray():[];

		$debtorspousemonthlyincome		=	IncomeDebtorSpouseMonthlyIncome::where('client_id',$client_id)->first();
		$debtorspousemonthlyincome		=	(!empty($debtorspousemonthlyincome))?$debtorspousemonthlyincome->toArray():[];

		$final_debtormonthlyincome		=	[];
		if(!empty($debtormonthlyincome)){
			foreach($debtormonthlyincome as $k=>$v){
				if(is_array(json_decode($v,1))){
					$final_debtormonthlyincome[$k]=json_decode($v,1);
				}else{
					$final_debtormonthlyincome[$k]=$v;
				}
			}
		}
		$final_debtorspousemonthlyincome		=	[];
		if(!empty($debtorspousemonthlyincome)){
			foreach($debtorspousemonthlyincome as $k=>$v){
				if(is_array(json_decode($v,1))){
					$final_debtorspousemonthlyincome[$k]=json_decode($v,1);
				}else{
					$final_debtorspousemonthlyincome[$k]=$v;
				}
			}
		}

		$income=['incomedebtoremployer'=>$incomedebtoremployer,'debtorspouseemployer'=>$debtorspouseemployer,'debtormonthlyincome'=>$final_debtormonthlyincome,'debtorspousemonthlyincome'=>$final_debtorspousemonthlyincome];
		return $income;
	}
	public function client_income_step1(Request $request){
		$client_id		=	Auth::user()->id;
		$check_marital_status=ClientBasicInfoPartA::where("client_id", $client_id)->select('marital_status')->first();
		// dd($check_marital_status->marital_status);

		if ($request->isMethod('post')) {
			$input = $request->all();
			// dd($input);
			if(!empty($input)){
				unset($input['_token']);
				$input['client_id']=Auth::user()->id;
				if(!empty($input['id'])){
					$id=$input['id'];
					unset($input['id']);
					IncomeDebtorEmployer::where("id", $id)->update($input);
					$insertedId=true;
				}else{
					$part2_info=IncomeDebtorEmployer::create($input);
				}
			}
			if(!empty($check_marital_status->marital_status) && in_array($check_marital_status->marital_status,['1','5'])){ //skipping first step if option is rent on proprty tab
				return redirect()->route('client_income_step2')->with('redirect',true);
			}
		}
		if(!empty($check_marital_status->marital_status) && in_array($check_marital_status->marital_status,['1','5']) && $request->isMethod('get')){ //skipping first step if option is rent on proprty tab
			return redirect()->route('client_income_step2')->with('redirect',true);
		}
		$steps=['step1'=>false,'step2'=>true,'step3'=>false,'step4'=>false];
		$steps['tab']='tab4';
		$client_id=Auth::user()->id;
		$income=$this->income_information_data($client_id);
		return view('client.dashboard',$steps)->with(['income'=>$income]);

	}
	public function client_income_step2(Request $request){
		$client_id=Auth::user()->id;
		$check_marital_status=ClientBasicInfoPartA::where("client_id", $client_id)->select('marital_status')->first();
		if ($request->isMethod('post')) {
			$input = $request->all();
			// dd($input);
			if(!empty($input)){
				unset($input['_token']);
				$input['client_id']=Auth::user()->id;
				if(!empty($input['id'])){
					$id=$input['id'];
					unset($input['id']);
					IncomeDebtorSpouseEmployer::where("id", $id)->update($input);
					$insertedId=true;
				}else{
					$part2_info=IncomeDebtorSpouseEmployer::create($input);
				}
			}
		}
		$redirect=false;
		if(!empty($check_marital_status->marital_status) && in_array($check_marital_status->marital_status,['1','5']) && $request->isMethod('get')){ //skipping first step if option is rent on proprty tab
			$redirect=true;
		}
		$steps=['step1'=>false,'step2'=>false,'step3'=>true,'step4'=>false];
		$steps['tab']='tab4';

		$income=$this->income_information_data($client_id);
		return view('client.dashboard',$steps)->with(['income'=>$income,'redirect'=>$redirect]);

	}
	public function client_income_step3(Request $request){
		$client_id=Auth::user()->id;
		$check_marital_status=ClientBasicInfoPartA::where("client_id", $client_id)->select('marital_status')->first();
		if ($request->isMethod('post')) {
			$input = $request->all();
			// dd($input);
			if(!empty($input)){
				unset($input['_token']);
				$final_input=[];
				foreach($input as $k=>$v){
					if(is_array($v)){
						$final_input[$k]=json_encode($v);
					}else{
						$final_input[$k]=$v;
					}
				}
				// dd($final_input);
				$final_input['client_id']=Auth::user()->id;
				if(!empty($final_input['id'])){
					$id=$final_input['id'];
					unset($final_input['id']);
					IncomeDebtorMonthlyIncome::where("id", $id)->update($final_input);
					$insertedId=true;
				}else{
					$part2_info=IncomeDebtorMonthlyIncome::create($final_input);
				}
			}
			if(!empty($check_marital_status->marital_status) && in_array($check_marital_status->marital_status,['1','5'])){ //skipping first step if option is rent on proprty tab
				return redirect()->route('client_expenses')->with('success','Information has been saved successfully');
			}
		}
		$steps=['step1'=>false,'step2'=>false,'step3'=>false,'step4'=>true];
		$steps['tab']='tab4';
		$client_id=Auth::user()->id;
		$income=$this->income_information_data($client_id);
		return view('client.dashboard',$steps)->with(['income'=>$income]);
	}
	public function client_income_step4(Request $request){
		if ($request->isMethod('post')) {
			$input = $request->all();
			// dd($input);
			if(!empty($input)){
				unset($input['_token']);
				$final_input=[];
				foreach($input as $k=>$v){
					if(is_array($v)){
						$final_input[$k]=json_encode($v);
					}else{
						$final_input[$k]=$v;
					}
				}
				// dd($final_input);
				$final_input['client_id']=Auth::user()->id;
				if(!empty($final_input['id'])){
					$id=$final_input['id'];
					unset($final_input['id']);
					IncomeDebtorSpouseMonthlyIncome::where("id", $id)->update($final_input);
					$insertedId=true;
				}else{
					$part2_info=IncomeDebtorSpouseMonthlyIncome::create($final_input);
				}
			}
		}
		$client_id=Auth::user()->id;
		FormsStepsCompleted::updateOrCreate(["client_id"=>$client_id],['step4'=>1]);
		return redirect()->route('client_expenses')->with('success','Information has been saved successfully');
	}
	public function client_expenses(Request $request){
		if ($request->isMethod('post')) {
			$input = $request->all();
// 			dd($input);
			if(!empty($input)){
				unset($input['_token']);
				$final_input=[];
				foreach($input as $k=>$v){
					if(is_array($v)){
						$final_input[$k]=json_encode($v);
					}else{
						$final_input[$k]=$v;
					}
				}
				// dd($final_input);
				$final_input['client_id']=Auth::user()->id;
				if(!empty($final_input['id'])){
					$id=$final_input['id'];
					unset($final_input['id']);
					Expenses::where("id", $id)->update($final_input);
					$insertedId=true;
				}else{
					$part2_info=Expenses::create($final_input);
				}
				$client_id=Auth::user()->id;
				if($input['live_separately'] == 1){
				    return redirect()->route('client_spouse_expenses')->with('success','Information has been saved successfully');
				}else{
				    FormsStepsCompleted::updateOrCreate(["client_id"=>$client_id],['step5'=>1]);
				    return redirect()->route('client_finacial_affairs')->with('success','Information has been saved successfully');
				}


				// return redirect()->route('client_spouse_expenses')->with('success','Information has been saved successfully');
				// return redirect()->route('client_finacial_affairs')->with('success','Information has been saved successfully');
			}
		}
		$client_id		=	Auth::user()->id;
		$steps=['step1'=>true,'step2'=>false,'step3'=>false,'step4'=>false];
		$steps['tab']='tab5';
		$expenses			=	Expenses::where('client_id',$client_id)->first();
		$expenses			=	(!empty($expenses))?$expenses->toArray():[];
		$final_expenses		=	[];
		if(!empty($expenses)){
			foreach($expenses as $k=>$v){
				if(is_array(json_decode($v,1))){
					if(!in_array($k,['utilities','mortgage_property'])){
						$final_expenses[$k]=array_values(json_decode($v,1));
					}else{
						$final_expenses[$k]=json_decode($v,1);
					}
				}else{
					$final_expenses[$k]=$v;
				}
			}
		}
		$rented_flag=false;
		$check_rented=ClientsPropertyResident::where("client_id", $client_id)->select('currently_lived')->first();
		if(isset($check_rented->currently_lived) && $check_rented->currently_lived==0){ //skipping first step if option is rent on proprty tab
			$rented_flag=true;
		}
		// dd($final_expenses);
		return view('client.dashboard',$steps)->with(['expenses'=>$final_expenses])->with('rented_flag',$rented_flag);
	}

	public function client_spouse_expenses(Request $request){
		if ($request->isMethod('post')) {
			$input = $request->all();
			// dd($input);
			if(!empty($input)){
				unset($input['_token']);
				$final_input=[];
				foreach($input as $k=>$v){
					if(is_array($v)){
						$final_input[$k]=json_encode($v);
					}else{
						$final_input[$k]=$v;
					}
				}
				// dd($final_input);
				$final_input['client_id']=Auth::user()->id;
				if(!empty($final_input['id'])){
					$id=$final_input['id'];
					unset($final_input['id']);
					SpouseExpenses::where("id", $id)->update($final_input);
					$insertedId=true;
				}else{
					$part2_info=SpouseExpenses::create($final_input);
				}
				$client_id=Auth::user()->id;
				FormsStepsCompleted::updateOrCreate(["client_id"=>$client_id],['step5'=>1]);
				return redirect()->route('client_finacial_affairs')->with('success','Information has been saved successfully');
			}
		}
		$client_id		=	Auth::user()->id;
		$steps=['step1'=>true,'step2'=>false,'step3'=>false,'step4'=>false];
		$steps['tab']='tab7';
		$expenses			=	SpouseExpenses::where('client_id',$client_id)->first();
		$expenses			=	(!empty($expenses))?$expenses->toArray():[];
		$final_expenses		=	[];
		if(!empty($expenses)){
			foreach($expenses as $k=>$v){
				if(is_array(json_decode($v,1))){
					if(!in_array($k,['utilities','mortgage_property'])){
						$final_expenses[$k]=array_values(json_decode($v,1));
					}else{
						$final_expenses[$k]=json_decode($v,1);
					}
				}else{
					$final_expenses[$k]=$v;
				}
			}
		}
		$rented_flag=false;
		$check_rented=ClientsPropertyResident::where("client_id", $client_id)->select('currently_lived')->first();
		if(isset($check_rented->currently_lived) && $check_rented->currently_lived==0){ //skipping first step if option is rent on proprty tab
			$rented_flag=true;
		}
		// dd($final_expenses);
		return view('client.dashboard',$steps)->with(['expenses'=>$final_expenses])->with('rented_flag',$rented_flag);
	}

	public function client_finacial_affairs(Request $request){
		if ($request->isMethod('post')) {
			$input = $request->all();
			// dd($input);
			if(!empty($input)){
				unset($input['_token']);
				$final_input=[];
				foreach($input as $k=>$v){
					if(is_array($v)){
						$final_input[$k]=json_encode($v);
					}else{
						$final_input[$k]=$v;
					}
				}
				// dd($final_input);
				$final_input['client_id']=Auth::user()->id;
				if(!empty($final_input['id'])){
					$id=$final_input['id'];
					unset($final_input['id']);
					FinancialAffairs::where("id", $id)->update($final_input);
					$insertedId=true;
				}else{
					$part2_info=FinancialAffairs::create($final_input);
				}

				return redirect()->route('client_document_uploads')->with('success','Information has been saved successfully');
			}
		}
		$client_id		=	Auth::user()->id;
		$sole_proprietor=	ClientBasicInfoPartRest::where('client_id',$client_id)->select('proprietor_status')->first();
		

		$steps=['step1'=>true,'step2'=>false,'step3'=>false,'step4'=>false];
		$steps['tab']='tab6';

		$finacial_affairs			=	FinancialAffairs::where('client_id',$client_id)->first();
		$finacial_affairs			=	(!empty($finacial_affairs))?$finacial_affairs->toArray():[];
		$final_finacial_affairs		=	[];
		if(!empty($finacial_affairs)){
			foreach($finacial_affairs as $k=>$v){
				if(is_array(json_decode($v,1))){
					if(in_array($k,['community_property_state','domestic_partner'])){
						$final_finacial_affairs[$k]=array_values(json_decode($v,1));
					}else{
						$final_finacial_affairs[$k]=json_decode($v,1);
					}
				}else{
					$final_finacial_affairs[$k]=$v;
				}
			}
		}
		 //dd($final_finacial_affairs);
		 $info=$this->basic_information_data($client_id);
		 
		return view('client.dashboard',$steps)->with(['finacial_affairs'=>$final_finacial_affairs,'sole_proprietor'=>json_decode($sole_proprietor)]);;
	}

	public function logout(){
		Auth::logout();
		return redirect()->route('client_login')->with('success','User has been logout successfully.');
	}
	public function document_uploads(Request $request){
		$client_id		=	Auth::user()->id;
		if ($request->isMethod('post')) {
			$client_with_payments =  ClientApplicationPayment::where('client_id',Auth::user()->id)->get()->toArray();
			if(empty($client_with_payments)){
				return redirect()->back()->with('error',"Cannot upload the documents untill Payment being processed by attorney. Please contact with attorney for payment");
			}
			// dd($request->all());
			if ($request->hasFile('document_file')) {
				$validator=$this->validate($request, [
					'document_file' => 'mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',//kb
				]);
				$store_path="documents/".$client_id;
				$path=public_path()."/documents/".$client_id;
				if (! File::exists($path)) {
					File::makeDirectory($path,0777,true);
				}
				$imageName = time().'.'.$request->document_file->extension();
				$mime_type=$request->document_file->getMimeType();
				$request->document_file->move($path, $imageName);
				$document_file=$store_path.'/'.$imageName;
				$document_type=$request->document_type;
				$upload_documets=[
					'client_id'=>$client_id,
					'document_file'=>$document_file,
					'mime_type'=>$mime_type,
					'document_type'=>$document_type,
				];
				if(!empty($request->document_id)){
					ClientDocumentUploaded::where("id", $request->document_id)->update($upload_documets);
				}else{
					ClientDocumentUploaded::create($upload_documets);
				}
				return redirect()->route('client_document_uploads')->with('success','Document has been uploaded successfully.');
			}
		}
		$documentuploaded=ClientDocumentUploaded::where("client_id", $client_id)->select('document_type')->get()->toArray();
		$documentuploaded=array_column($documentuploaded,'document_type');
		// dd($documentuploaded);
		$client_attorney=ClientsAttorney::where("client_id", $client_id)->select('attorney_id')->first();
		$client_attorney	=	(!empty($client_attorney)) ?$client_attorney:[];
		$attorneydocumentselection=[];
		$attorneydocuments=[];
		if(!empty($client_attorney->attorney_id)){
			$attorneydocumentselection=AttorneyDocumentSelection::where('attorney_id',$client_attorney->attorney_id)->select('document_selection')->first();
			$attorneydocumentselection	=	(!empty($attorneydocumentselection)) ?$attorneydocumentselection:[];

			$attorneydocuments=AttorneyDocuments::where('attorney_id',$client_attorney->attorney_id)->select('document_name')->get();
		}
		return view('client.document_upload',['client'=>true,'documentuploaded'=>$documentuploaded,'attorneydocumentselection'=>$attorneydocumentselection,'attorneydocuments'=>$attorneydocuments]);
	}
	public function client_retainer_documents(Request $request){
		$client_id		=	Auth::user()->id;
		if ($request->isMethod('post')) {
			// dd($request->all());
			if ($request->hasFile('retainer_document')) {
				$validator=$this->validate($request, [
					'retainer_document' => 'mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',//kb
				]);
				$store_path="documents/retainer/".$client_id;
				$path=public_path()."/documents/retainer/".$client_id;
				if (! File::exists($path)) {
					File::makeDirectory($path,0777,true);
				}
				$imageName = time().'.'.$request->retainer_document->extension();
				$mime_type=$request->retainer_document->getMimeType();
				$request->retainer_document->move($path, $imageName);
				$retainer_document=$store_path.'/'.$imageName;
				$document_type=$request->document_type;
				$upload_documets=[
					'client_id'=>$client_id,
					'attorney_id'=>$request->attorney_id,
					'retainer_document'=>$retainer_document,
					// 'mime_type'=>$mime_type,
					// 'document_type'=>$document_type,
				];

				/* Final submission of the forms */
				FormsStepsCompleted::updateOrCreate(["client_id"=>$client_id],['step6'=>1,'can_edit'=>2]);
				//capturing the stripe payment after completing form
				try {
					$client_with_payments =  ClientApplicationPayment::where('client_id',Auth::user()->id)->get()->toArray();
					if(empty($client_with_payments)){
						FormsStepsCompleted::updateOrCreate(["client_id"=>$client_id],['step6'=>1,'can_edit'=>2]);
						return redirect()->back()->with('error',"Payment has not processed by attorney. Please contact with attorney for payment");
					}
					if(!empty($client_with_payments[0]['stripe_payment_intent'] && $client_with_payments[0]['status']!='succeeded')){
						$client_with_payments=$client_with_payments[0];

						$intent_confirm=$this->stripe_client->paymentIntents->confirm(
						  $client_with_payments['stripe_payment_intent'],
						  ['payment_method' => $client_with_payments['payment_method']]
						);

						if($intent_confirm->status=='requires_capture'){
							ClientApplicationPayment::where('client_id',Auth::user()->id)->update(['status'=>$intent_confirm->status]);
							$intent = $this->stripe_client->paymentIntents->retrieve($client_with_payments['stripe_payment_intent']);
							$data=$intent->capture(['amount_to_capture' => $client_with_payments['amount']]);
							if($data->status=='succeeded'){
								ClientApplicationPayment::where('client_id',Auth::user()->id)->update(['status'=>$data->status]);
							}
						}
					}
				}catch (\Stripe\Error\Base $e) {
					 return redirect()->back()->with('error',$e->getMessage());
				}catch (Exception $e) {
				   return redirect()->back()->with('error',$e->getMessage());
				}

				ClientRetainerDocuments::updateOrCreate(["client_id"=>$client_id],$upload_documets);
				return redirect()->back()->with('success','Document has been uploaded successfully.');
			}
		}
		$client_attorney=ClientsAttorney::where("client_id", $client_id)->select('attorney_id')->first();
		$client_attorney	=	(!empty($client_attorney)) ?$client_attorney:[];
		$retainer_documents="";
		if(!empty($client_attorney->attorney_id)){
			$attorney_id=$client_attorney->attorney_id;
			$retainer_documents= RetainerDocuments::where('attorney_id',$attorney_id)->first();
			$retainer_documents	=	(!empty($retainer_documents)) ?$retainer_documents:[];

		}
		return view('client.client_retainer_document',['client'=>true,'retainer_documents'=>$retainer_documents,'attorney_id'=>$attorney_id]);
	}
	public function debts_documents(Request $request){
		$client_id	= 	Auth::user()->id;
		$validator=$this->validate($request, [
				'debts_document' => 'required|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
		],[
            'debts_document.required' => 'Please select the document file. File size must below 2 mb.',
        ]);
		$debts_document="";
		if ($request->hasFile('debts_document')) {
			$store_path="client/".$client_id."/debts/documents";
			$path=public_path()."/client/".$client_id."/debts/documents";
			if (! File::exists($path)) {
				File::makeDirectory($path,0777,true);
			}
			$imageName = time().'.'.$request->debts_document->extension();
			$request->debts_document->move($path, $imageName);
			$debts_document=$store_path.'/'.$imageName;
		}

		$debts_document_info =	[
								'client_id'=>$client_id,
								'debts_document'=>$debts_document,
								'document_type'=>$request->document_type,
							];


		DebtsDocuments::updateOrCreate(['client_id'=>$client_id,'document_type'=>$request->document_type],$debts_document_info);

        return redirect()->back()->with('success','Document has been uploaded successfully.');
	}
	public function signed_document(Request $request){
		$client_id	= 	Auth::user()->id;
		// $client=User::find($id);
		if ($request->isMethod('post')) {
			$validator=$this->validate($request, [
					'signed_document' => 'required|mimes:pdf|max:2048',
			],[
				'signed_document.required' => 'Please select the document file. File size must below 2 mb.',
			]);
			$signed_document="";
			if ($request->hasFile('signed_document')) {
				$store_path="client/".$client_id."/signed_document";
				$path=public_path()."/client/".$client_id."/signed_document";
				if (! File::exists($path)) {
					File::makeDirectory($path,0777,true);
				}
				$imageName = time().'.'.$request->signed_document->extension();
				$request->signed_document->move($path, $imageName);
				$signed_document=$store_path.'/'.$imageName;
				$data=['sign_document'=>$signed_document,'is_sent'=>0];
				SignedDocuments::updateOrCreate(['client_id'=>$client_id],$data);
			}

			return redirect()->back()->with('success','Document has been sent successfully.');
		}else{
			return redirect()->back()->with('error','Not a valid request.');
		}
	}


    public function basic_email() {
       // return 1;
     $data = array('name'=>"Faraz");
      Mail::send('mail', $data, function($message) {
         $message->to('info@bkassistant.net', 'Tutorials Point')->subject
            ('Laravel HTML Testing Mail');
         $message->from('website@bkassistant.net','Faraz');
      });
      echo "HTML Email Sent. Check your inbox.";
   }


}
