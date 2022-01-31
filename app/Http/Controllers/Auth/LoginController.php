<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
	public function login(Request $request){
		$request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
		if (Auth::attempt(['email' => $request->email, 'password' => $request->password,  'role' => User::ATTORNEY])) {
			return redirect()->route('attorney_dashboard')->with('success','User has been login successfully.');
			
		}else{
			 return redirect()->back()->with('error','User does not exist.');
		}
		 // do whatever yo desire


	}
}
