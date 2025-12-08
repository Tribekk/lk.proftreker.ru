<?php

use App\User\Controllers\ForgotPasswordController;
use App\User\Controllers\LoginController;
use App\User\Controllers\RegisterController;
use App\User\Controllers\TelegramAuthController;
use App\User\Controllers\ResetPasswordController;
use App\User\Controllers\VerificationController;
use Illuminate\Support\Facades\Route;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/telegram', [TelegramAuthController::class, 'authenticate'])->name('register.telegram');

Route::get('password/phone', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/password', [ForgotPasswordController::class, 'sendResetCode'])->name('password.phone');
Route::get('password/reset', [ResetPasswordController::class, 'showResetForm'])->middleware('password.reset')->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->middleware('password.reset')->name('password.update');

Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('email/verify/{id}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
