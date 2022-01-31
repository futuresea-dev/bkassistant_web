<?php
use App\Http\Controllers\AttorneyController;
use App\Http\Controllers\StripeController;

Route::group(['prefix' => 'attorney','middleware' => ['auth']],function () {
	Route::get('/dashboard', [AttorneyController::class, 'dashboard'])->name('attorney_dashboard');
	Route::get('/logout', [AttorneyController::class, 'logout'])->name('attorney_logout');
	
	/* Attorney Management section*/	
	Route::post('/client/add', [AttorneyController::class, 'add'])->name('attorney_client_add');
	Route::post('/client/edit', [AttorneyController::class, 'edit_client'])->name('attorney_edit_client');
	Route::match(['get', 'post'],'/client/edit/{id}', [AttorneyController::class, 'edit'])->name('attorney_client_edit');
	Route::get('/client/view/{id}', [AttorneyController::class, 'view'])->name('attorney_client_view');
	Route::get('/client/delete/{id}', [AttorneyController::class, 'delete'])->name('attorney_client_delete');
	
	Route::get('/client/management', [AttorneyController::class, 'client_management'])->name('attorney_client_management');
	Route::get('/client/uploaded/documents/{id}', [AttorneyController::class, 'client_uploaded_documents'])->name('attorney_client_uploaded_documents');
	Route::post('/client/send/request', [AttorneyController::class, 'client_send_edit_request'])->name('attorney_client_send_request');
	Route::get('/client/editable/sections', [AttorneyController::class, 'get_editable_sections'])->name('client_editable_sections');

	/* report upload */
	Route::post('/client/credit/report/uploads', [AttorneyController::class, 'credit_report_uploads'])->name('credit_report_uploads');

	Route::post('/client/credit/report/edit', [AttorneyController::class, 'credit_report_edit'])->name('attorney_edit_client_report');

	Route::get('/client/{id}/credit-report/download/csv', [AttorneyController::class, 'download_attorney_csv'])->name('download_attorney_csv');

	Route::get('/client/{id}/credit-report/download/bci', [AttorneyController::class, 'download_attorney_bci'])->name('download_attorney_bci');
	
	/* Setting section setup */
	Route::get('/settings', [AttorneyController::class, 'settings'])->name('attorney_settings');
	Route::post('/subscription', [AttorneyController::class, 'subscription'])->name('attorney_subscription');
	
	Route::get('/form/submission/view/{id}', [AttorneyController::class, 'form_submission_view'])->name('attorney_form_submission_view');
	Route::post('/company/profile', [AttorneyController::class, 'company_profile'])->name('attorney_company_profile');
	Route::post('/update/password', [AttorneyController::class, 'update_password'])->name('attorney_update_password');
	Route::post('/retainer/document', [AttorneyController::class, 'retainer_document'])->name('attorney_retainer_doc');
	Route::match(['get', 'post'],'/sign/document/{id}', [AttorneyController::class, 'signed_document'])->name('attorney_signed_doc');
	
	
	Route::post('/payment', [StripeController::class, 'payment'])->name('attorney_payment');
	Route::post('/client/application/payment', [StripeController::class, 'client_application_payment'])->name('attorney_client_application_payment');
	Route::get('/payment/capture', [StripeController::class, 'payment_capture'])->name('attorney_payment_capture');

	
	
	Route::get('/transactions', [AttorneyController::class, 'transactions'])->name('attorney_transactions');
	Route::match(['get', 'post'],'/document/management', [AttorneyController::class, 'manage_document'])->name('attorney_document_mgt');
	Route::match(['post'],'/document/management/edit', [AttorneyController::class, 'manage_document_edit'])->name('attorney_document_edit');
	Route::match(['post'],'/document/selection', [AttorneyController::class, 'document_selection'])->name('attorney_document_selection');
	
	Route::match(['get'],'/csv', [AttorneyController::class, 'csv'])->name('attorney_document_csv');
	Route::match(['get'],'/official/form/{id}', [AttorneyController::class, 'official_form'])->name('attorney_offical_form');

	
	
});