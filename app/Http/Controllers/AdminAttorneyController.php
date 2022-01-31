<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeAboard;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\AttorneyDocumentSelection;

class AdminAttorneyController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function listing()
    {	 $attorney=User::where('role',User::ATTORNEY)->orderBy('id', 'DESC')->paginate(10);
         return view('admin.attorney.list',['attorney'=>$attorney]);
    }
	
	public function add(Request $request){
		if ($request->isMethod('post')) {
			$input = $request->all();
			$validator=$this->validate($request, [
				'name' => 'required|alpha_dash_space',
				'email' => 'required|email|unique:App\Models\User,email',
				'company' => 'required|alpha_dash_space',
			]);
			$password=mt_rand(100000, 999999);			
			$input['password']= Hash::make($password);
			$input['role']=User::ATTORNEY;
	   // dd($input);
			$user=User::create($input);
			if(!empty($user['email'])){
				$doc_data['attorney_id']=$user->id;
				$doc_data['document_selection']='Drivers_License,Social_Security_Card,Last_3_months_Pay_Stubs,Credit_Counseling_Certificate,Last_2_years_Tax_Returns,Credit_Report_2_reports,Current_Auto_Loan_Statement,Current_Mortgage_Statement,Life_Insurance_Declaration_Pages,Miscellaneous_Doucments';
				AttorneyDocumentSelection::create($doc_data);
				$user['password']=$password;
				$user['pass_flag']=True;
				Mail::to($user['email'])->send(new WelcomeAboard($user));
			}
			$insertedId= $user->id;
			if(!empty($insertedId)){
				return redirect()->route('admin_attorney_list')->with('success','User has been added successfully.');
			}else{
				return redirect()->route('admin_attorney_list')->with('error','Record has not been saved, Please check.');
			}
		}else{
            return redirect()->back()->with('error','Not a valid request, Please check.');
        }
	}
	public function edit(Request $request,$id){
		$attorney = User::find($id);
		if ($request->isMethod('post')) {
			if(empty($id)){
				return redirect()->route('admin_attorney_list')->with('error','Invalid Request.');
			}
			$input = $request->all();
	   
			$validator=$this->validate($request, [
				'name' => 'required|alpha_dash_space',
				'email' => 'required|email|unique:App\Models\User,email,'.$id,
				'company' => 'required|alpha_dash_space',
			]);	
			unset($input['_token']);			
			$user=User::where('id', $id)->update($input);			
			if(!empty($user)){
				return redirect()->route('admin_attorney_list')->with('success','User has been updated successfully.');
			}else{
				return redirect()->route('admin_attorney_list')->with('error','Record has not been saved, Please check.');
			}
		}else{
            return view('admin.attorney.edit',['User'=>$attorney]);
        }
	}
	public function view(Request $request,$id){
		$attorney = User::find($id);
		return view('admin.attorney.view',['User'=>$attorney]);
	}
	public function delete($id){
		$deletedRows = User::where('id', $id)->delete();
		if(!empty($deletedRows)){			
			return redirect()->route('admin_attorney_list')->with('success','User has been deleted successfully.');
		}
	}
}
