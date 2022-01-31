<?php

namespace App\Http\Controllers;
use Auth;
use File;
use DB;
use Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeAboard;
use App\Mail\EditRequest;
use App\Mail\SignedDocument;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\ClientsAttorney;
use App\Models\AttorneyCards;
use App\Models\AttorneyCompany;
use App\Models\FormsStepsCompleted;

/* Form submission models */
use App\Models\ClientBasicInfoPartA;
use App\Models\ClientAnyOtherNameData;
use App\Models\ClientLivedAddressFrom730Data;
use App\Models\ClientBasicInfoPartB;
use App\Models\ClientBasicInfoPartC;
use App\Models\ClientBasicInfoPartRest;

use App\Models\ClientsPropertyResident;
use App\Models\ClientsPropertyVehicle;
use App\Models\ClientsPropertyHousehold;
use App\Models\ClientsPropertyFinancialAssets;
use App\Models\ClientsPropertyBusinessAssets;
use App\Models\ClientsPropertyFarmCommercial;
use App\Models\ClientsPropertyMiscellaneous;

use App\Models\IncomeDebtorEmployer;
use App\Models\IncomeDebtorSpouseEmployer;
use App\Models\IncomeDebtorMonthlyIncome;
use App\Models\IncomeDebtorSpouseMonthlyIncome;

use App\Models\Debts;
use App\Models\Expenses;
use App\Models\FinancialAffairs;

use App\Models\ClientApplicationPayment;

use App\Models\ClientDocumentUploaded;

use App\Models\RetainerDocuments;

use App\Models\ClientRetainerDocuments;
use App\Models\AdminPaymentSettings;
use App\Models\DebtsDocuments;
use App\Models\AttorneySubscription;

use App\Models\AttorneyDocuments;
use App\Models\AttorneyDocumentSelection;
use App\Models\SignedDocuments;

use App\Http\Controllers\StripeController;

// require_once(app_path().'/Thirdparty/vendor/autoload.php');
// use PhpOffice\PhpSpreadsheet\Helper\Sample;
// use PhpOffice\PhpSpreadsheet\IOFactory;
// use PhpOffice\PhpSpreadsheet\Spreadsheet;

class AttorneyController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {	
		$client_count=User::orderBy('id', 'DESC')
			  ->leftJoin('tbl_clients_attorney','users.id', '=', 'tbl_clients_attorney.client_id')
			  ->leftJoin('users as attorney','attorney.id', '=', 'tbl_clients_attorney.attorney_id')
			  ->where('users.role',User::CLIENT)->where('attorney.id',Auth::user()->id)->select(['users.id'])->get()->toArray();
			  
		$client=User::orderBy('id', 'DESC')
			  ->leftJoin('tbl_clients_attorney','users.id', '=', 'tbl_clients_attorney.client_id')
			  ->leftJoin('users as attorney','attorney.id', '=', 'tbl_clients_attorney.attorney_id')
			  ->where('users.role',User::CLIENT)->where('attorney.id',Auth::user()->id)->paginate(10,['users.*','attorney.name as attorney_name']);
		// $client_list=array_column($client,'id');
		$documentuploaded=ClientDocumentUploaded::select('client_id','document_type')->get()->toArray();

		$documentuploaded_final=[];
		if(!empty($documentuploaded)){
			foreach($documentuploaded as $documents){
				$documentuploaded_final[$documents['client_id']][]=$documents['document_type'];
			}
		}
		$signed_documents=0;
		if(!empty($client_count)){
			foreach($client_count as $val){
				if(!empty($documentuploaded_final[$val['id']])){
					$signed_documents+=count($documentuploaded_final[$val['id']]);
				}
			}
		}
		// dump($documentuploaded_final);
		// dd($signed_documents);
        $company="";
        if(Auth::check()&& !empty(Auth::user()->id)){
            $attorney_id=Auth::user()->id;
            //Change Show terms to 0 after showing first time to user so user does not see terms popup again
            User::where("id", $attorney_id)->update(["show_terms"=>0]);

            $attorney_company	=   AttorneyCompany::where('attorney_id',$attorney_id)->first();
            $company	=	(!empty($attorney_company)) ?$attorney_company->company_name:Auth::user()->name;
        }

		$pending_documents=(count($client_count)*10)-$signed_documents;
		$pending_documents=($pending_documents>0)?$pending_documents:0;
		// dd($client);
		
// 		    $user=User::first();
// 			$attorney=[];
// 			$client_attorney=[];
// 			$video_subscription	=   AttorneySubscription::where(['attorney_id'=>$client_attorney,'type'=>'2','subscribe'=>'1'])->select('video_link','thumbnail_video_image')->first();
// 			$subscription_video	=	(!empty($video_subscription->video_link)) ?$video_subscription->video_link:'';
// 			$thumbnail_video_image	=	(!empty($video_subscription->thumbnail_video_image)) ?$video_subscription->thumbnail_video_image:'';
// 			Mail::to('sam.beatum@gmail.com')->send(new WelcomeAboard($user,false,$attorney,$subscription_video,$thumbnail_video_image));
		
		
         return view('attorney.dashboard',['client'=>$client,'client_count'=>$client_count,'signed_documents'=>$signed_documents,'pending_documents'=>$pending_documents,"user_data"=>Auth::user(),"company"=>$company]);
    }

	public function add(Request $request){
		if ($request->isMethod('post')) {
			$input = $request->all();

			$validator=$this->validate($request, [
				'name' => 'required|alpha_dash_space',
				'email' => 'required|email|unique:App\Models\User,email',
			]);
			$password=mt_rand(100000, 999999);
			$input['password']= Hash::make($password);
			$input['role']=User::CLIENT;
			$client_attorney=$input['client_attorney'];
			unset($input['client_attorney']);
			$user=User::create($input);
			if(!empty($user['email'])){
				$user['password']=$password;
				$user['pass_flag']=True;
				$attorney=User::leftJoin('tbl_attorney_company','users.id', '=', 'tbl_attorney_company.attorney_id')
				->where('users.id',$client_attorney)->select('tbl_attorney_company.company_name','users.name')
				->first();
				$video_subscription	=   AttorneySubscription::where(['attorney_id'=>$client_attorney,'type'=>'2','subscribe'=>'1'])->select('video_link','thumbnail_video_image')->first();
				$subscription_video	=	(!empty($video_subscription->video_link)) ?$video_subscription->video_link:'';
				$thumbnail_video_image	=	(!empty($video_subscription->thumbnail_video_image)) ?$video_subscription->thumbnail_video_image:'';
				Mail::to($user['email'])->send(new WelcomeAboard($user,false,$attorney,$subscription_video,$thumbnail_video_image));
			}
			$insertedId= $user->id;
			if(!empty($insertedId)){
				$client_attorney=['client_id'=>$insertedId,'attorney_id'=>$client_attorney,];
				ClientsAttorney::create($client_attorney);
				return redirect()->route('attorney_dashboard')->with('success','User has been added successfully.');
			}else{
				return redirect()->route('attorney_dashboard')->with('error','Record has not been saved, Please check.');
			}
		}else{
           return redirect()->back()->with('error','Not a valid request, Please check.');
        }
	}
	public function edit_client(Request $request){
		if ($request->isMethod('post')) {
			$input = $request->all();
			$id=$input['client_id'];
			$validator=$this->validate($request, [
				'name' => 'required|alpha_dash_space',
				'email' => 'required|email|unique:App\Models\User,email,'.$id,
			]);
			// dd($input);
			unset($input['_token'],$input['client_id']);
			if(!isset($input["retainer_agreement_box"])){
			    $input["retainer_agreement_box"]=0;
            }
			if(!empty($id)){
				User::where("id", $id)->update($input);
			}
			$insertedId= true;
			if(!empty($insertedId)){
				return redirect()->route('attorney_client_management')->with('success','User has been updated successfully.');
			}else{
				return redirect()->route('attorney_client_management')->with('error','Record has not been saved, Please check.');
			}
		}else{
           return redirect()->back()->with('error','Not a valid request, Please check.');
        }
	}
	public function edit(Request $request,$id){
		$client = User::select('users.*','tbl_clients_attorney.attorney_id','tbl_clients_attorney.id as clients_attorney_id')
				->where('users.id',$id)
				->leftJoin('tbl_clients_attorney','users.id', '=', 'tbl_clients_attorney.client_id')->first();
		$attorney=User::where('role',User::ATTORNEY)->orderBy('id', 'DESC')->get();
		if ($request->isMethod('post')) {
			if(empty($id)){
				return redirect()->route('admin_client_list')->with('error','Invalid Request.');
			}
			$input = $request->all();

			$validator=$this->validate($request, [
				'name' => 'required|alpha_dash_space',
				'email' => 'required|email|unique:App\Models\User,email,'.$id,
				'client_attorney' => 'required',
			]);
			$clients_attorney_id=$input['clients_attorney_id'];
			$client_attorney=$input['client_attorney'];
			unset($input['_token'],$input['clients_attorney_id'],$input['client_attorney']);
			$user=User::where('id', $id)->update($input);
			if(!empty($user)){
				ClientsAttorney::where('id', $clients_attorney_id)->update(['attorney_id'=>$client_attorney]);
				return redirect()->route('admin_client_list')->with('success','User has been updated successfully.');
			}else{
				return redirect()->route('admin_client_list')->with('error','Record has not been saved, Please check.');
			}
		}else{
            return view('admin.client.edit',['User'=>$client,'attorney'=>$attorney]);
        }
	}
	public function view(Request $request,$id){
		$client = User::select('users.*','attorney.name as attorney_name')->where('users.id',$id)
					->leftJoin('tbl_clients_attorney','users.id', '=', 'tbl_clients_attorney.client_id')
					->leftJoin('users as attorney','attorney.id', '=', 'tbl_clients_attorney.attorney_id')->first();
		return view('admin.client.view',['User'=>$client]);
	}
	public function delete($id){
		$deletedRows = User::where('id', $id)->delete();
		if(!empty($deletedRows)){
			return redirect()->route('admin_attorney_list')->with('success','User has been deleted successfully.');
		}
	}
	public function client_management(Request $request){
		$client=User::orderBy('id', 'DESC')
			  ->leftJoin('tbl_clients_attorney','users.id', '=', 'tbl_clients_attorney.client_id')
			  ->leftJoin('users as attorney','attorney.id', '=', 'tbl_clients_attorney.attorney_id');
		if(!empty($request->query('q'))){
			$client->orWhere(function($query) use ($request) {
				$query->Where('users.name', 'like', '%' . $request->query('q') . '%');
				$query->orWhere('users.email', 'like', '%' . $request->query('q') . '%');
			});
		}
		$client=$client->where('users.role',User::CLIENT)->where('attorney.id',Auth::user()->id);
		// dump($client->getBindings());
		// dd($client->toSql());
		$client=$client->paginate(10,['users.*','attorney.name as attorney_name']);

		$attorneycards	=   AttorneyCards::where('attorney_id',Auth::user()->id)->first();
		$attorneycards	=	(!empty($attorneycards)) ?$attorneycards:[];

		$form_completed_clients	=   FormsStepsCompleted::select('client_id',DB::raw('SUM(step1+step2+step3+step4+step5+step6) as Total'))->groupBy('client_id')->get()->pluck('Total','client_id')->toArray();

		$editable	=   FormsStepsCompleted::select('client_id','can_edit')->get()->pluck('can_edit','client_id')->toArray();

		$client_with_payments	=   ClientApplicationPayment::where('attorney_id',Auth::user()->id)->select('client_id')->get()->pluck('client_id')->toArray();
		// dd($editable);
		$payment_settings	=	AdminPaymentSettings::where('id',1)->select('payment_charge')->first();
		$payment_settings	=	(!empty($payment_settings)) ?$payment_settings:[];

        return view('attorney.client_management',['client'=>$client,'attorneycards'=>$attorneycards,'editable'=>$editable,'form_completed_clients'=>$form_completed_clients,'client_with_payments'=>$client_with_payments,'payment_settings'=>$payment_settings]);
    }
	public function settings(){
		$attorney_id	= 	Auth::user()->id;
		$attorneycards	=   AttorneyCards::where('attorney_id',$attorney_id)->first();
		$attorneycards	=	(!empty($attorneycards)) ?$attorneycards:[];

		$attorney_company	=   AttorneyCompany::where('attorney_id',$attorney_id)->first();
		$attorney_company	=	(!empty($attorney_company)) ?$attorney_company:[];

		$retainer_documents	=   RetainerDocuments::where('attorney_id',$attorney_id)->first();
		$retainer_documents	=	(!empty($retainer_documents)) ?$retainer_documents:[];
		
		$storage_subscription	=   AttorneySubscription::where(['attorney_id'=>$attorney_id,'type'=>'1'])->first();
		$storage_subscription	=	(!empty($storage_subscription)) ?$storage_subscription:[];
		
		$video_subscription	=   AttorneySubscription::where(['attorney_id'=>$attorney_id,'type'=>'2'])->first();
		$video_subscription	=	(!empty($video_subscription)) ?$video_subscription:[];

        return view('attorney.settings',['attorneycards'=>$attorneycards,'attorney_company'=>$attorney_company,'retainer_documents'=>$retainer_documents,'storage_subscription'=>$storage_subscription,'video_subscription'=>$video_subscription])->with('active',3);
    }
	public function subscription(Request $request){
		if ($request->isMethod('post')) {			
			$input = $request->all();
			$attorney_id	= 	Auth::user()->id;
			$subscription	=array(
				'attorney_id'=>$attorney_id,
				'type'=>$input['type'],
				'amount'=>$input['amount'],
				'subscribe'=>$input['subscribe'],
				'video_link'=>(!empty($input['video_link']))?$input['video_link']:"",
			);
		
			$thumbnail_video_image="";
			if ($request->hasFile('thumbnail_file')) {
				$store_path="attorney/".$attorney_id."/subscription_image";
				$path=public_path()."/attorney/".$attorney_id."/subscription_image";
				if (! File::exists($path)) {
					File::makeDirectory($path,0777,true);
				}
				$imageName = time().'.'.$request->thumbnail_file->extension();
				$request->thumbnail_file->move($path, $imageName);
				$thumbnail_video_image=$store_path.'/'.$imageName;
				$subscription['thumbnail_video_image']=$thumbnail_video_image;
			}
			unset($input['thumbnail_file']);
			if(!empty($input['id'])){
				AttorneySubscription::where("id", $input['id'])->update($subscription);
				$attorney_subscription=$input['id'];
			}else{
				$attorney_subscription=AttorneySubscription::create($subscription);
				$attorney_subscription=$attorney_subscription->id;
			}
			if(!empty($input['type']) && $input['type']==2 && $input['subscribe']==1){
				$subscription_info=AttorneySubscription::where('id',$attorney_subscription)->select('stripe_subscription_id')->first();
				if(empty($subscription_info->stripe_subscription_id)){
					$stripe = new StripeController;
					$stripe->video_subscription(@$input['amount'],$attorney_subscription);
				}
			}
			if(isset($input['subscribe']) && $input['subscribe']==0 && $input['type']==2){
				$stripe = new StripeController;
				// dd($attorney_subscription);
				$stripe->cancel_subscription($attorney_subscription);
			}
			return redirect()->route('attorney_settings')->with('active',1)->with('success','Addon has been updated successfully.');
		}
	}
	public function transactions(Request $request){
		$attorney_transactions	=   ClientApplicationPayment::orderBy('id', 'DESC')
		->leftJoin('users','users.id', '=', 'tbl_client_application_payments.client_id');
		if(!empty($request->query('q'))){
			$attorney_transactions->orWhere(function($query) use ($request) {
				$query->Where('users.name', 'like', '%' . $request->query('q') . '%');
				$query->orWhere('users.email', 'like', '%' . $request->query('q') . '%');
				$query->orWhere('tbl_client_application_payments.amount', 'like', '%' . $request->query('q') . '%');
			});
		}
		$attorney_transactions->where('attorney_id',Auth::user()->id);
		// dump($attorney_transactions->getBindings());
		// dd($attorney_transactions->toSql());
		$attorney_transactions=$attorney_transactions->paginate(10,['tbl_client_application_payments.*','users.name','users.email']);
        return view('attorney.transaction',['attorney_transactions'=>$attorney_transactions]);
    }
	public function client_uploaded_documents($id){
		$documentuploaded_data=ClientDocumentUploaded::where("client_id", $id)->select('document_file','document_type')->get()->toArray();
		$documentuploaded=array_column($documentuploaded_data,'document_type');
		$documentuploaded_files=array_column($documentuploaded_data,'document_file','document_type');

		$retainer_documents= ClientRetainerDocuments::where('client_id',$id)->first();
		$retainer_documents	=(!empty($retainer_documents)) ?$retainer_documents:[];

		$debts_documents=DebtsDocuments::where('client_id',$id)->get()->toArray();
		$debts_documents=array_column($debts_documents,'debts_document','document_type');
		
		$sign_document= SignedDocuments::where('client_id',$id)->select('sign_document')->first();
		$sign_document	=(!empty($sign_document)) ?$sign_document:[];
		// dd($retainer_documents->retainer_document);
        return view('attorney.client_uploaded_documents',['client'=>true,'documentuploaded'=>$documentuploaded,'documentuploaded_files'=>$documentuploaded_files,'retainer_documents'=>$retainer_documents,'debts_documents'=>$debts_documents,'sign_document'=>$sign_document]);
    }
	public function company_profile(Request $request){
		// dd($request->all());
		$attorney_id	= 	Auth::user()->id;
		$validator=$this->validate($request, [
				'attorney_name' => 'required|alpha_dash_space',
				'attorney_email' => 'required|email|unique:App\Models\User,email,'.$attorney_id,
				'company_name' => 'required|alpha_dash_space',
				'attorney_phone' => 'required|digits:10'
		]);
		$attorney_info	=	[
								'name'=>$request->attorney_name,
								'email'=>$request->attorney_email,
							];
		User::where('id',$attorney_id)->update($attorney_info);
		$company_logo="";
		if ($request->hasFile('company_logo')) {
			$validator=$this->validate($request, [
				'company_logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			]);
			$store_path="attorney/".$attorney_id."/company";
			$path=public_path()."/attorney/".$attorney_id."/company";
			if (! File::exists($path)) {
				File::makeDirectory($path,0777,true);
			}
			$imageName = time().'.'.$request->company_logo->extension();
			$request->company_logo->move($path, $imageName);
			$company_logo=$store_path.'/'.$imageName;
		}

		$company_info	=	[
								'company_name'=>$request->company_name,
								'state_bar'=>$request->state_bar,
								'attorney_address'=>$request->attorney_address,
								'attorney_city'=>$request->attorney_city,
								'attorney_state'=>$request->attorney_state,
								'attorney_zip'=>$request->attorney_zip,
								'attorney_phone'=>$request->attorney_phone,
								'attorney_fax'=>$request->attorney_fax,
								'attorney_id'=>$attorney_id
							];
		if(!empty($company_logo)){
			$company_info['company_logo']=$company_logo;
		}
		if(!empty($request->company_id)){
			AttorneyCompany::where('id',$request->company_id)->update($company_info);
		}else{
			AttorneyCompany::create($company_info);
		}

        return redirect()->route('attorney_settings')->with('active',1)->with('success','Profile has been updated successfully.');
    }
	public function update_password(Request $request){
		$id	= 	Auth::user()->id;
		$user = User::findOrFail($id);
		if(!empty($user->id)){
			$this->validate($request, [
				'password' => 'required',
				'new_password' => 'max:8|different:password',
				'confirm_password' => 'required|same:new_password'
			]);

			if (Hash::check($request->password, $user->password)) {
			   $user->fill([
				'password' => Hash::make($request->new_password)
				])->save();
				return redirect()->route('attorney_settings')->with('success','User password has been updated successfully.');

			} else {
				return redirect()->route('attorney_settings')->with('error','old Password does not match.');
			}
		}else{
			return redirect()->route('attorney_settings')->with('error','User does not exist.');
		}
	}
	public function logout(){
		Auth::logout();
		return redirect()->route('login')->with('success','User has been logout successfully.');
	}
	public function client_send_edit_request(Request $request){
		// dump($request->all());
		if(!empty($request->client_id)){
			$client_id=$request->client_id;
			$editable_section=(!empty($request->editable_section))?implode(',',$request->editable_section):"";
			// dd($editable_section);
			FormsStepsCompleted::where('client_id',$client_id)->update(['can_edit'=>1,'editable_section'=>$editable_section]);
			$user=User::find($client_id);
			$message=$request->request_msg;
			$tab_listing=[1=>'Basic info',2=>'Property',3=>'Debts',4=>'Current Income',5=>'Current Expense',6=>'Statement of Financial Affairs'];
			$editable_tabs="";
			if(!empty($request->editable_section)){
				foreach($request->editable_section as $edit_tabs){
					$editable_tabs.=$tab_listing[$edit_tabs].",";
				}
			}
			Mail::to($user['email'])->send(new EditRequest($user,$message,$editable_tabs));
			return redirect()->route('attorney_client_management')->with('success','Request has been send successfully.');
		}else{
			return redirect()->route('attorney_client_management')->with('error','Parameters are missing. please check your request.');
		}
	}
	public function get_editable_sections(Request $request,$client_id=null){
		// dd($request->all());
		if(!empty($request->client_id)){
			$client_id=$request->client_id;
			$editable_section_data=FormsStepsCompleted::where('client_id',$client_id)->select(['editable_section'])->first();
			$editable_section_data=(!empty($editable_section_data['editable_section']))?explode(',',$editable_section_data['editable_section']):[];
			// dump($editable_section_data);
			echo json_encode($editable_section_data);
		}else{
			echo json_encode(['error'=>'something went wrong']);
		}
	}
	public function retainer_document(Request $request){
		$attorney_id	= 	Auth::user()->id;
		$validator=$this->validate($request, [
				'retainer_document' => 'required|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
		],[
            'retainer_document.required' => 'Please select the document file. File size must below 2 mb.',
        ]);
		$retainer_document="";
		if ($request->hasFile('retainer_document')) {
			$store_path="attorney/".$attorney_id."/documents";
			$path=public_path()."/attorney/".$attorney_id."/documents";
			if (! File::exists($path)) {
				File::makeDirectory($path,0777,true);
			}
			$imageName = time().'.'.$request->retainer_document->extension();
			$request->retainer_document->move($path, $imageName);
			$retainer_document=$store_path.'/'.$imageName;
		}

		$retainer_document_info	=	[
								'retainer_document'=>$retainer_document,
								'attorney_id'=>$attorney_id
							];

		if(!empty($request->document_id)){
			RetainerDocuments::where('id',$request->document_id)->update($retainer_document_info);
		}else{
			RetainerDocuments::create($retainer_document_info);
		}

        return redirect()->route('attorney_settings')->with('success','Document has been uploaded successfully.');
	}
	public function signed_document(Request $request,$id){
		$attorney_id	= 	Auth::user()->id;
		$client=User::find($id);
		if ($request->isMethod('post')) {
			$validator=$this->validate($request, [
					'signed_document' => 'required|mimes:pdf|max:2048',
			],[
				'signed_document.required' => 'Please select the document file. File size must below 2 mb.',
			]);
			$signed_document="";
			if ($request->hasFile('signed_document')) {
				$store_path="attorney/".$attorney_id."/signed_document";
				$path=public_path()."/attorney/".$attorney_id."/signed_document";
				if (! File::exists($path)) {
					File::makeDirectory($path,0777,true);
				}
				$imageName = time().'.'.$request->signed_document->extension();
				$request->signed_document->move($path, $imageName);
				$signed_document=$store_path.'/'.$imageName;
				
				$signed_document=url($signed_document);
				if(!empty($client['email'])){
					$attorney_name=Auth::user()->name;
					Mail::to($client['email'])->send(new SignedDocument($client,$signed_document,$attorney_name));
				}
				$data=array(
					'attorney_id'=>$attorney_id,
					'client_id'=>$id,
					'is_sent'=>1,
				);
				SignedDocuments::updateOrCreate(['attorney_id'=>$attorney_id],$data);
			}

			return redirect()->back()->with('success','Document has been sent successfully.');
		}
		return view('attorney.signed_document',['attorney_id'=>$attorney_id,'client_id'=>$id]);
	}
	public function manage_document(Request $request){
		if ($request->isMethod('post')) {			
			$input=$request->all();
			$attorney_id	= 	Auth::user()->id;
			$input['attorney_id']=$attorney_id;
			AttorneyDocuments::create($input);
			return redirect()->route('attorney_document_mgt')->with('success','Document has been added successfully.');
		}		
		$documents=AttorneyDocuments::orderBy('id', 'DESC')->where('attorney_id',Auth::user()->id)->paginate(10);
		$document_selection=AttorneyDocumentSelection::where('attorney_id',Auth::user()->id)->select('document_selection')->first();
		$document_selection=(!empty($document_selection))?$document_selection:[];
		return view('attorney.document_management',['documents'=>$documents,'document_selection'=>$document_selection,]);
	}
	public function manage_document_edit(Request $request){
		if ($request->isMethod('post')) {			
			$input=$request->all();
			$attorney_id	= 	Auth::user()->id;
			$input['attorney_id']=$attorney_id;
			$document_id=$input['document_id'];
			unset($input['document_id'],$input['_token']);
			AttorneyDocuments::where(['id'=>$document_id])->update($input);
			return redirect()->route('attorney_document_mgt')->with('success','Document has been updated successfully.');
		}		
	}
	public function document_selection(Request $request){
		if ($request->isMethod('post')) {			
			$input=$request->all();
			$attorney_id	= 	Auth::user()->id;
			$input['attorney_id']=$attorney_id;
			$input['document_selection']=implode(',',$input['document_selection']);
			AttorneyDocumentSelection::updateOrCreate(['attorney_id'=>$attorney_id],$input);
			return redirect()->route('attorney_document_mgt')->with('success','Document Selection has been updated successfully.');
		}
	}
	public function form_submission_view(Request $request,$id){
		$client_id	=	$id;
		$debts		=	Debts::where('client_id',$client_id)->first();
		$debts		=	(!empty($debts))?$debts->toArray():[];
		$basic_info=$this->basic_information_data($client_id);
		$property_info=$this->property_information_data($client_id);
		$income_info=$this->income_information_data($client_id);
		$expenses_info=$this->expenses_information($client_id);
		$financialaffairs_info=$this->financialaffairs_information($client_id);

        return view('attorney.form_submission_view',['basic_info'=>$basic_info,'property_info'=>$property_info,'income_info'=>$income_info,'debts'=>$debts,'expenses_info'=>$expenses_info,'financialaffairs_info'=>$financialaffairs_info, 'client_id'=>$client_id]);
    }
	public function basic_information_data($client_id){
		$BasicInfoPartA				=	ClientBasicInfoPartA::where('client_id',$client_id)->first();
		$BasicInfo_AnyOtherName		=	ClientAnyOtherNameData::where('client_id',$client_id)->first();
		$BasicInfo_AddressFrom730	=	ClientLivedAddressFrom730Data::where('client_id',$client_id)->first();
		$BasicInfo_PartB			=	ClientBasicInfoPartB::where('client_id',$client_id)->first();
		$BasicInfo_PartC			=	ClientBasicInfoPartC::where('client_id',$client_id)->first();
		$BasicInfo_PartRest			=	ClientBasicInfoPartRest::where('client_id',$client_id)->first();
		$info=['BasicInfoPartA'=>$BasicInfoPartA,'BasicInfo_AnyOtherName'=>$BasicInfo_AnyOtherName,'BasicInfo_AddressFrom730'=>$BasicInfo_AddressFrom730,'BasicInfoPartB'=>$BasicInfo_PartB,'BasicInfo_PartC'=>$BasicInfo_PartC,'BasicInfo_PartRest'=>$BasicInfo_PartRest];
		return $info;
	}
	public function property_information_data($client_id){
		$propertyresident	=	ClientsPropertyResident::where('client_id',$client_id)->get();
		$propertyvehicle	=	ClientsPropertyVehicle::where('client_id',$client_id)->get();
		$propertyhousehold	=	ClientsPropertyHousehold::where('client_id',$client_id)->get()->toArray();
		$financialassets	=	ClientsPropertyFinancialAssets::where('client_id',$client_id)->get()->toArray();
		$businessassets		=	ClientsPropertyBusinessAssets::where('client_id',$client_id)->get()->toArray();
		$farmcommercial		=	ClientsPropertyFarmCommercial::where('client_id',$client_id)->get()->toArray();
		$miscellaneous		=	ClientsPropertyMiscellaneous::where('client_id',$client_id)->get()->toArray();

		$resident=['propertyresident'=>$propertyresident,'propertyvehicle'=>$propertyvehicle,'propertyhousehold'=>$propertyhousehold,'financialassets'=>$financialassets,'businessassets'=>$businessassets,'farmcommercial'=>$farmcommercial,'miscellaneous'=>$miscellaneous];
		return $resident;
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
	function expenses_information($client_id){
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
		return $final_expenses;
	}
	function financialaffairs_information($client_id){
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
		return $final_finacial_affairs;
	}
	public function official_form($id){
		$client_id	=	$id;
		$attorney_id	= 	Auth::user()->id;
		$debts		=	Debts::where('client_id',$client_id)->first();
		$debts		=	(!empty($debts))?$debts->toArray():[];
		$attorney_company		=	AttorneyCompany::where('attorney_id',$attorney_id)->first();
		$attorney_company		=	(!empty($attorney_company))?$attorney_company->toArray():[];
		$basic_info=$this->basic_information_data($client_id);
		$property_info=$this->property_information_data($client_id);
		$income_info=$this->income_information_data($client_id);
		$expenses_info=$this->expenses_information($client_id);
		$financialaffairs_info=$this->financialaffairs_information($client_id);
		// dump($basic_info);
        return view('attorney.official_form',['basic_info'=>$basic_info,'property_info'=>$property_info,'income_info'=>$income_info,'debts'=>$debts,'attorney_company'=>$attorney_company,'expenses_info'=>$expenses_info,'financialaffairs_info'=>$financialaffairs_info]);
	}

	public function credit_report_uploads(Request $request){
		$attorneyId		=	Auth::user()->id;
		if ($request->hasFile('report_file')) {
			$validator = Validator::make($request->all(), [
	            'report_file' => 'required|mimes:pdf|max:3072',
	            'client_id' => 'required',
	        ]);
			if ($validator->fails()) {
	           return redirect()->route('attorney_client_management')->with('error','Please Select Only PDF file and less then 3072 kb');
	        }

	        $clientId = $request->input('client_id');

			$store_path="creditReport/".$attorneyId."/".$clientId;
			$path=public_path()."/creditReport/".$attorneyId."/".$clientId;
			if (! File::exists($path)) {
				File::makeDirectory($path,0777,true);
			}

			$imageName = time().'.'.$request->report_file->extension();
			$mime_type=$request->report_file->getMimeType();
			$request->report_file->move($path, $imageName);
			$report_file=$store_path.'/'.$imageName;
			$document_type=$request->document_type;
			return redirect()->route('attorney_client_management')->with('success','Report has been uploaded successfully.');
		}
		return redirect()->route('attorney_client_management')->with('error','Please select Report file.');
	}

	public function credit_report_edit(Request $request) {
		$attorneyId		=	Auth::user()->id;
		$validator = Validator::make($request->all(), [
			'client_id' => 'required',
	       ]);
		if ($validator->fails()) {
           return redirect()->route('attorney_client_management')->with('error','Please add client id');
        }
	}

	public function download_attorney_csv(Request $request, $id) {
		$attorneyId		=	Auth::user()->id;
		if (empty($id)) {
           return redirect()->back()->with('error','Please download later, something going wrong.');
        }

        $client_id  = $id;
        $debts		=	Debts::where('client_id',$client_id)->first();
		$debts		=	(!empty($debts))?$debts->toArray():[];
		$basic_info=$this->basic_information_data($client_id);
		$property_info=$this->property_information_data($client_id);
		$income_info=$this->income_information_data($client_id);
		$expenses_info=$this->expenses_information($client_id);
		$financialaffairs_info=$this->financialaffairs_information($client_id);

		dd($basic_info);

        $fileName = 'client-report-CREDITRS.csv';
   		// get data
   		$data = array();


        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('Title', 'Assign', 'Description', 'Start Date', 'Due Date');

        $callback = function() use($data, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);
            if (!empty($data)) {
            	foreach ($data as $task) {
	                $row['Title']  = $task->title;
	                $row['Assign']    = $task->assign->name;
	                $row['Description']    = $task->description;
	                $row['Start Date']  = $task->start_at;
	                $row['Due Date']  = $task->end_at;

	                fputcsv($file, array($row['Title'], $row['Assign'], $row['Description'], $row['Start Date'], $row['Due Date']));
	            }
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
	}

	public function download_attorney_bci(Request $request, $id) {
		$attorneyId		=	Auth::user()->id;
		if (empty($id)) {
           return redirect()->back()->with('error','Please download later, something going wrong.');
        }

       $baseFileName = 'report-base-file.bci';
       $fileName = 'report-full-file-'.$id . '.bci';

       copy(public_path($baseFileName), public_path($fileName));

        $client_id  = $id;
        $debts		=	Debts::where('client_id',$client_id)->first();
		$debts		=	(!empty($debts))?$debts->toArray():[];

		$basic_info=$this->basic_information_data($client_id);
		$BasicInfoPartA=$basic_info['BasicInfoPartA'];
		$BasicInfo_AnyOtherName=(!empty($basic_info['BasicInfo_AnyOtherName']))?$basic_info['BasicInfo_AnyOtherName']->toArray():[];

		$BasicInfo_AddressFrom730=(!empty($basic_info['BasicInfo_AddressFrom730']))?$basic_info['BasicInfo_AddressFrom730']->toArray():[];

		$BasicInfoPartB=(!empty($basic_info['BasicInfoPartB']))?$basic_info['BasicInfoPartB']->toArray():[];

		$BasicInfo_PartC=(!empty($basic_info['BasicInfo_PartC']))?$basic_info['BasicInfo_PartC']->toArray():[];

		$BasicInfo_PartRest=(!empty($basic_info['BasicInfo_PartRest']))?$basic_info['BasicInfo_PartRest']->toArray():[];



		$property_info=$this->property_information_data($client_id);
		$income_info=$this->income_information_data($client_id);
		$expenses_info=$this->expenses_information($client_id);
		$financialaffairs_info=$this->financialaffairs_information($client_id);

   	   $data = "CaseNotes=". Helper::validate_key_value('case_number',$BasicInfo_PartC) ."\nNatureOfDebt=1\nTypeOfDebtor=1\nChapter=1\nStatus=". Helper::validate_key_value('status',$BasicInfo_PartC);
   	  	$data = $data . "\n";
   		$data = $data . "[Debtor]\nFirstName=". Helper::validate_key_value('name',$BasicInfoPartA) . "\nMiddleName=". Helper::validate_key_value('middle_name',$BasicInfoPartA) ."\nLastName=". Helper::validate_key_value('last_name',$BasicInfoPartA) ."\nGeneration=\nAddr=". Helper::validate_key_value('Address',$BasicInfoPartA) ."\nCity=". Helper::validate_key_value('City',$BasicInfoPartA) ."\nState=" .Helper::validate_key_value('state',$BasicInfoPartA). "\nZip=" .Helper::validate_key_value('zip',$BasicInfoPartA). "\nMailAddr=\nMailCity=\nMailSt=\nMailZip=\nHomePhone=\nWorkPhone=\nCellPhone=\nCounty=\nEMail=\nContactNotes=\nSocSecNo=";
   		$data = $data . "\n";
   		$data = $data . "[Joint]\nFirstName=\nMiddleName=\nLastName=\nGeneration=\nAddr=\nCity=\nState=\nZip=\nMailAddr=\nMailCity=\nMailSt=\nMailZip=\nHomePhone=\nWorkPhone=\nCellPhone=\nEMail=\nCounty=";
   		$data = $data . "\n";
   		$data = $data . "[Other Names]\n";
   		$data = $data . "\n";
   		$data = $data . "[Dependant]\n";
   		$data = $data . "Son,20,Matthew Smoke,3,3\n";
   		$data = $data . "\n";
   		$data = $data . "[Prior Cases]\n";
   		$data = $data . "01/01/1999,,\n";
   		$data = $data . "\n";
   		$data = $data . "[Related Cases]\n";
   		$data = $data . "\n";
   		$data = $data . "[SchAB]\n";
   		$data = $data . "PLinkID,Type,Owner,MarketValue,SecuredAmt,Interest,Description,Address1,Address2,Address3,City,State,Zip,SingleFamilyHome,DuplexMultiUnit,CondoCoop,Mobile,Land,Investment,Timeshare,Other,OtherType,AddlDescription1,AddlDescription2,AddlDescription3,AddlDescription4,Community,OwnedWithAnother,Amended,OwnedPercent\n";
   		$data = $data . "\n";
   		$data = $data . "[SchDEF]\n";
   		$data = $data . "CLinkID,Owner,Schedule,Name,Address1,Address2,Address3,City,State,Zip,Country,AccountNo,MaskAcct,DateIncurred,Contingent,Unliquidated,Disputed,Setoff,ClaimAmt,Amended,ExSchedule,ExMatrix,PropertyName,PLinkID,LienNature,PropertyValue,UnsecuredAmt,SeniorLiens,Consideration,PriorityAmt,CreditorType,LNAgreement,LNJudgement,LNStatutory,LNOther\n";
   		$data = $data . "\n";
   		$data = $data . "[ANP]\n";
   		$data = $data . "Name,Address1,Address2,Address3,City,State,Zip,Phone,AccountNo,CLinkID\n";
   		$data = $data . "\n";
   		$data = $data . "[SchH]\n";
   		$data = $data . "Name,Address1,Address2,Address3,City,State,Zip,CLinkID,LLinkID\n";
   		$data = $data . "\n";
   		$data = $data . "[SchG]\n";
   		$data = $data . "LLinkID,Name,Address1,Address2,Address3,City,State,Zip,Intention,Description,Eviction\n";
   		$data = $data . "\n";
   		$data = $data . "[PriorSpouses]\n";
   		$data = $data . "SpouseID,Name,Address1,Address2,City,State,ZIP,MarriageDates,StateResided,SpouseDS,Comment\n";
   		$data = $data . "\n";
   		$data = $data . "[SFA]\n";
   		$data = $data . "\n";
   		$data = $data . "[Income]\n";
   		$data = $data . "dOccupation=Premises Technician\ndEmployer=AT&T\ndEmpAddr=208 S Akard||\ndEmpCity=Dallas\ndEmpState=TX\ndEmpZip=75202-00000\ndHowLong=7 Years, 6 Months\ndPayPeriod=3\ndWages=2390.52\ndOvertime=110.68\ndTax=293.52\ndInsurance=7.00\ndUnion=2.00\ndRetireMandatory=141.66\ndRetireVoluntary=94.44\ndRetireLoan=103.61\ndPension=2486.41\nExpChangeYES=0\nExpChange=AT&T Change: |\n\nsEmpAddr=||\nsPayPeriod=0\nsNotEmployed=1\n\nDeductionDesc1=ca sdi\nDeductionAmtD1=24.94\n\nOtherDesc1=Fresno County Adoption Assitance for 5 Children\nOtherAmtS1=4583.00\n\n";
   		$data = $data . "\n";
   		$data = $data . "[Employers]\n";
   		$data = $data . "\n";
   		$data = $data . "[Expense]\n";
   		$data = $data . "Rent=2263.49\nTaxesIncluded=0\nInsuranceInc=0\nElectricity=300.00\nWater=200.00\nTelephone=300.00\nHomeMaintenance=420.00\nFood=600.00\nClothing=50.00\nTransportation=200.00\nRecreation=300.00\nInsuranceLife=228.40\nInsuranceAuto=300.00\nInsuranceDsc1=Lincoln Benefit Life\nInsuranceAmt1=82.79\nInsuranceDsc2=Aflac Accident Insurance\nInsuranceAmt2=121.66\nInstallmentAuto=270.00\nInstallmentDsc1=affirm\nInstallmentAmt1=31.31\nOtherDsc5=Netflix\nOtherAmt5=13.99\nIncludesOthers=0\nPersonalCare=100.00\nInstallmentAuto2=755.00\nExpChangeYES=0\n\n\n";
   		$data = $data . "\n";
   		$data = $data . "[MTInc]\n";
   		$data = $data . "Type,DorS,ThruDate,Method,HasExp,Description,Inc1,Inc2,Inc3,Inc4,Inc5,Inc6,Exp1,Exp2,Exp3,Exp4,Exp5,Exp6,IncSame6,ExpSame6,MTIID,Remarks\n";
   		$data = $data . "\n";

       $context_options = array (
        'http' => array (
            'method' => 'POST',
            'header'=> "Content-type: application/x-wine-extension-ini\r\n"
                . "Content-Length: " . strlen($data) . "\r\n",
            'content' => $data
            )
        );

       $context = stream_context_create($context_options);

       file_put_contents(public_path($fileName), $data, FILE_APPEND, $context);
       $msg = 'You have successfully generated report file. Please <a href="'. url('/'. $fileName) . '" download> click here  </a> to download the file';

       return redirect()->route('attorney_form_submission_view', ['id'=> $id])->with('success', $msg);
	}


	/*public function csv(){	
		$client_id	=	$id;
		$debts		=	Debts::where('client_id',$client_id)->first();
		$debts		=	(!empty($debts))?$debts->toArray():[];
		$basic_info=$this->basic_information_data($client_id);
		$property_info=$this->property_information_data($client_id);
		$income_info=$this->income_information_data($client_id);
		$expenses_info=$this->expenses_information($client_id);
		$financialaffairs_info=$this->financialaffairs_information($client_id);
		// Create new Spreadsheet object
		$spreadsheet = new Spreadsheet();

		// Set document properties
		$spreadsheet->getProperties()->setCreator('Maarten Balliauw')
			->setLastModifiedBy('Maarten Balliauw')
			->setTitle('Office 2007 XLSX Test Document')
			->setSubject('Office 2007 XLSX Test Document')
			->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')
			->setKeywords('office 2007 openxml php')
			->setCategory('Test result file');

		// Add some data
		$spreadsheet->setActiveSheetIndex(0)
			->setCellValue('A1', 'Hello')
			->setCellValue('B2', 'world!')
			->setCellValue('C1', 'Hello')
			->setCellValue('D2', 'world!');

		//$spreadsheet->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $value);

		// Rename worksheet
		$spreadsheet->getActiveSheet()->setTitle('Simple');

		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$spreadsheet->setActiveSheetIndex(0);

		// Redirect output to a client’s web browser (Xlsx)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="01simple.xlsx"');
		header('Cache-Control: max-age=0');
		// If you're serving to IE 9, then the following may be needed
		header('Cache-Control: max-age=1');

		// If you're serving to IE over SSL, then the following may be needed
		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
		header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
		header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
		header('Pragma: public'); // HTTP/1.0

		$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
		$writer->save('php://output');
		exit;
	}*/
}
