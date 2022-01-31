<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\Models\FormsStepsCompleted;
use App\Models\ClientsAttorney;
use App\Models\AttorneyCompany;
use App\Models\SignedDocuments;
use Validator;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
		Validator::extendImplicit('alpha_dash_space', function($attr, $value){
            return preg_match('/^[A-Za-z0-9_\s\-]+$/', $value);
        },'The :attr may only contain letters, numbers, dashes, space and underscores.');
		Validator::replacer('alpha_dash_space', function($message, $attribute, $rule, $parameters){			
			return str_replace(':attr', str_replace('_',' ',ucwords($attribute)), $message);
		});
		view()->composer('*', function($view){			
			if(!empty(Auth::check())&& !empty(Auth::user()->id)){
				$can_editable_info=FormsStepsCompleted::where(['client_id'=>Auth::user()->id])->select('can_edit','client_id')->first();	
				$can_editable=true;
				if(!empty($can_editable_info->can_edit) && $can_editable_info->can_edit==1 && !empty($can_editable_info->client_id)){
					$can_editable=true;
				}
				if(isset($can_editable_info->can_edit) && $can_editable_info->can_edit==0 && !empty($can_editable_info->client_id)){
					$can_editable=false;
				}					
				View::share('can_editable', $can_editable);
			}
			if(!empty(Auth::check())&& !empty(Auth::user()->id) && Auth::user()->role==3){
				$client_attorney	=	ClientsAttorney::where("client_id", Auth::user()->id)->select('attorney_id')->first();
				$client_attorney	=	(!empty($client_attorney)) ?$client_attorney:[];
				$attorney_company=[];
				if(!empty($client_attorney->attorney_id)){
					$attorney_id		=	$client_attorney->attorney_id;
					$attorney_company	=   AttorneyCompany::where('attorney_id',$attorney_id)->first();
					$attorney_company	=	(!empty($attorney_company)) ?$attorney_company:[];
				}
				View::share('attorney_company', $attorney_company);
				
				$signeddocuments=SignedDocuments::where("client_id", Auth::user()->id)->select('is_sent')->first();
				$signeddocuments	=	(!empty($signeddocuments->is_sent)) ?true:false;
				View::share('signeddocuments', $signeddocuments);
			}
		});
    }
}
