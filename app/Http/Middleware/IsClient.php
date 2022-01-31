<?php
  
namespace App\Http\Middleware;
  
use Closure;
use Auth;
   
class IsClient
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check() && auth()->user()->role == 3){
            return $next($request);
        }else{
			return redirect()->route('client_login')->with('error',"You don't have client access.");			
		}
   
    }
}