<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AdminPaymentSettings;
use App\Models\ClientDocumentUploaded;
use App\Models\ClientApplicationPayment;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
         return view('admin.login');
    }
	public function index(Request $request){
		$input = $request->all();
   
        $validator=$this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);		
        if(Auth::attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->role == '1') {
                return redirect()->route('admin_dashboard')->with('success','You are logged in.');
            }
        }else{
            return redirect()->route('admin_login')->with('error','Email-Address And Password Are Wrong.');
        }
	}
	public function dashboard(){
		$users=User::select('id','role')->get()->toArray();
		$users_count=array_column($users,'id','role');
		
		$payment_sum=ClientApplicationPayment::select('amount')->get()->toArray();
		$payment_sum=array_sum(array_column($payment_sum,'amount'))/100;
		
		$client=User::orderBy('id', 'DESC')
			  ->leftJoin('tbl_clients_attorney','users.id', '=', 'tbl_clients_attorney.client_id')
			  ->leftJoin('users as attorney','attorney.id', '=', 'tbl_clients_attorney.attorney_id')
			  ->where('users.role',User::CLIENT)->select(['users.id','users.role'])->get()->toArray();
		$client_count=count($client);
		
		$documentuploaded=ClientDocumentUploaded::select('client_id','document_type')->get()->toArray();
		
		$documentuploaded_final=[];
		if(!empty($documentuploaded)){
			foreach($documentuploaded as $documents){
				$documentuploaded_final[$documents['client_id']][]=$documents['document_type'];
			}
		}
		$signed_documents=0;
		if(!empty($documentuploaded_final)){
			foreach($documentuploaded_final as $val){
				$signed_documents+=count($val);
			}
		}
		// dd($payment_sum);
		$pending_documents=($client_count*9)-$signed_documents;
		return view('admin.dashboard',['users_count'=>$users_count,'client_count'=>$client_count,'signed_documents'=>$signed_documents,'pending_documents'=>$pending_documents,'payment_sum'=>$payment_sum]);
	}
	public function settings(Request $request){
		$payment_settings=AdminPaymentSettings::where('id',1)->first();
		$payment_settings	=	(!empty($payment_settings)) ?$payment_settings:[];
		if ($request->isMethod('post')) {
			$input = $request->all();
   
			$validator=$this->validate($request, [
				'payment_charge' => 'required',
				'discount_percentage' => 'required',
			]);
			if(!empty($input['setting_id'])){
				$id=$input['setting_id'];
				unset($input['_token'],$input['setting_id']);
				$user=AdminPaymentSettings::where('id', $id)->update($input);
			}else{
				AdminPaymentSettings::create($input);
			}
			return redirect()->back()->with('success','Information has been saved successfully.');
		}
		return view('admin.settings',['payment_settings'=>$payment_settings]);
	}
	public function logout(){
		Auth::logout();
		return redirect()->route('admin_login')->with('success','User has been logout successfully.');
	}
}
