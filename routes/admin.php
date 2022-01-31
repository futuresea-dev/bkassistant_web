<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAttorneyController;
use App\Http\Controllers\AdminClientController;




Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'create'])->name('admin_login');	
    Route::post('/login', [AdminController::class, 'index'])->name('authenticate_admin');	
});
Route::group(['prefix' => 'admin','middleware' => ['is_admin']],function () {
	Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard');
	Route::get('/logout', [AdminController::class, 'logout'])->name('admin_logout');
	
	/* Attorney Management section*/
	Route::get('/user/attorney', [AdminAttorneyController::class, 'listing'])->name('admin_attorney_list');
	Route::post('/user/attorney/add', [AdminAttorneyController::class, 'add'])->name('admin_attorney_add');
	Route::match(['get', 'post'],'/user/attorney/edit/{id}', [AdminAttorneyController::class, 'edit'])->name('admin_attorney_edit');
	Route::get('/user/attorney/view/{id}', [AdminAttorneyController::class, 'view'])->name('admin_attorney_view');
	Route::get('/user/attorney/delete/{id}', [AdminAttorneyController::class, 'delete'])->name('admin_attorney_delete');
	
	
	/* Client Management section*/
	Route::get('/user/client', [AdminClientController::class, 'listing'])->name('admin_client_list');
	Route::post('/user/client/add', [AdminClientController::class, 'add'])->name('admin_client_add');
	Route::match(['get', 'post'],'/user/client/edit/{id}', [AdminClientController::class, 'edit'])->name('admin_client_edit');
	Route::get('/user/client/view/{id}', [AdminClientController::class, 'view'])->name('admin_client_view');
	Route::get('/user/client/delete/{id}', [AdminClientController::class, 'delete'])->name('admin_client_delete');
	
	/* Payment settings */
	Route::match(['get', 'post'],'/payment/settings', [AdminController::class, 'settings'])->name('admin_payment_settings');

	
	
});