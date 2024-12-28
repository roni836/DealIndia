<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('user.home');
});


Route::get('/admin', function () {
    return view('Admin.dashboard');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/verification', function () {
    return view('auth.verification');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware('auth');

Route::post('/send-otp', [AuthController::class, 'sendOTP'])->middleware('throttle:5,1');
Route::post('/verify-otp', [AuthController::class, 'verifyOTP']);
Route::post('/new-register',[AuthController::class,"register"])->name("user.register");
Route::post('/send-login-link', [AuthController::class, 'sendLoginLink'])->name('sendLoginLink');
Route::get('/login/link', [AuthController::class, 'loginViaLink'])->name('loginViaLink');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin/application', [AdminController::class, 'pendingApplication']);
Route::get('/admin/application-approved', [AdminController::class, 'approvedApplication']);
Route::get('/admin/application/{id}', [ApplicationController::class, 'editApplication']);
Route::post('/admin/application/generate/{id}', [ApplicationController::class, 'generateCode']);



