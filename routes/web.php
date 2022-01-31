<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('mailtesting',[ClientController::class , 'basic_email']);



Route::get('/', function () {
    return view('home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/facts', [App\Http\Controllers\HomeController::class, 'facts'])->name('facts');


/* START:: For Terms & Conditions */
Route::get('/terms-of-services', [App\Http\Controllers\HomeController::class, 'terms_of_services'])->name('terms-of-services');

Route::prefix('client')->group(function () {
    Route::get('/login', [ClientController::class, 'create'])->name('client_login');
    Route::post('/login', [ClientController::class, 'index'])->name('authenticate_client');
});
Route::group(['prefix' => 'client','middleware' => ['is_client']],function () {
	Route::get('/dashboard', [ClientController::class, 'basic_information'])->name('client_dashboard');
	Route::get('/logout', [ClientController::class, 'logout'])->name('client_logout');
	Route::match(['get', 'post'],'/basicinfo/step1', [ClientController::class, 'basic_info_step1'])->name('client_basic_info_step1');
	Route::match(['get', 'post'],'/basicinfo/step2', [ClientController::class, 'basic_info_step2'])->name('client_basic_info_step2');
	Route::match(['get', 'post'],'/basicinfo/step3', [ClientController::class, 'basic_info_step3'])->name('client_basic_info_step3');
	Route::match(['get', 'post'],'/basicinfo/step4', [ClientController::class, 'basic_info_step4'])->name('client_basic_info_step4');
	Route::match(['get', 'post'],'/basicinfo/step5', [ClientController::class, 'basic_info_step5'])->name('client_basic_info_step5');
	Route::post('/basicinfo/step6', [ClientController::class, 'basic_info_step6'])->name('client_basic_info_step6');

	/* Property-Part */
	Route::get('/dashboard/property', [ClientController::class, 'property_information'])->name('property_information');
	Route::match(['get', 'post'],'/property/step1', [ClientController::class, 'client_property_step1'])->name('client_property_step1');
	Route::match(['get', 'post'],'/property/step2', [ClientController::class, 'client_property_step2'])->name('client_property_step2');
	Route::match(['get', 'post'],'/property/step3', [ClientController::class, 'client_property_step3'])->name('client_property_step3');
	Route::match(['get', 'post'],'/property/step4', [ClientController::class, 'client_property_step4'])->name('client_property_step4');
	Route::match(['get', 'post'],'/property/step5', [ClientController::class, 'client_property_step5'])->name('client_property_step5');
	Route::match(['get', 'post'],'/property/step6', [ClientController::class, 'client_property_step6'])->name('client_property_step6');
	Route::match(['get', 'post'],'/property/step7', [ClientController::class, 'client_property_step7'])->name('client_property_step7');


	/* debts-Part */
	Route::match(['get', 'post'],'/dashboard/debts', [ClientController::class, 'client_debts'])->name('client_debts');
	Route::match(['get', 'post'],'/debts/step2', [ClientController::class, 'client_debts_step2'])->name('client_debts_step2');


	/* Income-Part */
	Route::match(['get', 'post'],'/dashboard/income', [ClientController::class, 'client_income'])->name('client_income');
	Route::match(['get', 'post'],'/income/step1', [ClientController::class, 'client_income_step1'])->name('client_income_step1');
	Route::match(['get', 'post'],'/income/step2', [ClientController::class, 'client_income_step2'])->name('client_income_step2');
	Route::match(['get', 'post'],'/income/step3', [ClientController::class, 'client_income_step3'])->name('client_income_step3');
	Route::match(['get', 'post'],'/income/step4', [ClientController::class, 'client_income_step4'])->name('client_income_step4');

	/* Expenses-Part */
	Route::match(['get', 'post'],'/dashboard/expenses', [ClientController::class, 'client_expenses'])->name('client_expenses');

    /* Spouce Expenses */
    Route::match(['get', 'post'],'/dashboard/spouse_expenses', [ClientController::class, 'client_spouse_expenses'])->name('client_spouse_expenses');

	/* Financial-Affairs */
	Route::match(['get', 'post'],'/dashboard/financial/affairs', [ClientController::class, 'client_finacial_affairs'])->name('client_finacial_affairs');

	/* Document upload */
	Route::match(['get', 'post'],'/dashboard/document/uploads', [ClientController::class, 'document_uploads'])->name('client_document_uploads');

	Route::match(['get', 'post'],'/dashboard/document/multi-uploads', [ClientController::class, 'mutiple_document_uploads'])->name('client_mutiple_document_uploads');

	Route::match(['get', 'post'],'/dashboard/retainer/documents', [ClientController::class, 'client_retainer_documents'])->name('client_retainer_documents');

	Route::match(['post'],'/dashboard/debts/documents', [ClientController::class, 'debts_documents'])->name('debts_documents');

	Route::match(['post'],'/sign/document/', [ClientController::class, 'signed_document'])->name('client_signed_doc');

});
require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/attorney.php';




//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});
//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});
//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});
//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});
//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});
//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
