<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Mail\WelcomeAboard;
use App\Models\User;
use App\Models\ClientsAttorney;
use Illuminate\Support\Facades\Mail;

class AdminClientController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function listing()
    {
		$attorney=User::where('role',User::ATTORNEY)->orderBy('id', 'DESC')->get();
		$client=User::orderBy('id', 'DESC')
			  ->leftJoin('tbl_clients_attorney','users.id', '=', 'tbl_clients_attorney.client_id')
			  ->leftJoin('users as attorney','attorney.id', '=', 'tbl_clients_attorney.attorney_id')
			  ->where('users.role',User::CLIENT)->paginate(10,['users.*','attorney.name as attorney_name']);		
        return view('admin.client.list',['client'=>$client,'attorney'=>$attorney]);
    }
	public function add(Request $request){
		if ($request->isMethod('post')) {
			$input = $request->all();
	   
			$validator=$this->validate($request, [
				'name' => 'required|alpha_dash_space',
				'email' => 'required|email|unique:App\Models\User,email',
				'client_attorney' => 'required',
			]);
			$password=mt_rand(100000, 999999);			
			$input['password']= Hash::make($password);
			$input['role']=User::CLIENT;
			$input['user_added_by']=1;//admin
			$client_attorney=$input['client_attorney'];
			unset($input['client_attorney']);
			$user=User::create($input);
			if(!empty($user['email'])){
				$user['password']=$password;
				$user['pass_flag']=True;
				$attorney=User::where('users.id',$client_attorney)->select('tbl_attorney_company.company_name','users.name')
				->leftJoin('tbl_attorney_company','users.id', '=', 'tbl_attorney_company.attorney_id')->first();
				// Mail::to($user['email'])->send(new WelcomeAboard($user,false,$attorney));
			}
			$insertedId= $user->id;
			if(!empty($insertedId)){
				$client_attorney=['client_id'=>$insertedId,'attorney_id'=>$client_attorney,];
				ClientsAttorney::create($client_attorney);
				return redirect()->route('admin_client_list')->with('success','User has been added successfully.');
			}else{
				return redirect()->route('admin_client_list')->with('error','Record has not been saved, Please check.');
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
			$input['user_added_by']=1;//admin			
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
			return redirect()->route('admin_client_list')->with('success','User has been deleted successfully.');
		}
	}
	
}
