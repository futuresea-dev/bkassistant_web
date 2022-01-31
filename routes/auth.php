<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use Illuminate\Support\Facades\Route;

Route::get('login', [LoginController::class,'showLoginForm'])->name('login');
Route::post('login', [LoginController::class,'login']);
Route::get('logout', [LoginController::class,'logout'])->name('logout');

// Registration Routes...
Route::get('register', [RegisterController::class,'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class,'register']);

// Password Reset Routes...
Route::get('password/reset', [ForgotPasswordController::class,'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class,'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class,'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class,'reset'])->name('password.update');

// Confirm Password (added in v6.2)
Route::get('password/confirm', [ConfirmPasswordController::class,'showConfirmForm']);
Route::post('password/confirm', [ConfirmPasswordController::class,'confirm']);

// Email Verification Routes...
Route::get('email/verify', [VerificationController::class,'show'])->name('verification.notice');
Route::get('email/verify/{id}/{hash}', [VerificationController::class,'verify'])->name('verification.verify'); // v6.x
Route::get('email/resend', [VerificationController::class,'resend'])->name('verification.resend');
