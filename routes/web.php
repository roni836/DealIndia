<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;
use App\Models\Setting;

Route::get('/', [UserController::class, 'home'])->name('homepage');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/services', [UserController::class, 'services'])->name('services');
Route::get('/privacy-policy', [UserController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/Terms-of-Service', [UserController::class, 'termsOfService'])->name('Terms-of-Service');


Route::get('/login', function () {
    $data['logo'] = Setting::first();
    return view('auth.login', $data);
})->name('login');

Route::get('/verification', function () {
    $data['logo'] = Setting::first();
    return view('auth.verification',$data);
});

Route::get('/register', function () {
    $data['logo'] = Setting::first();

    return view('auth.register', $data);
});

Route::get('/dashboard', function () {
    $data['logo'] = Setting::first();
    return view('user.dashboard',$data);
})->middleware('auth');



Route::post('/send-otp', [AuthController::class, 'sendOTP'])->middleware('throttle:5,1');
Route::post('/verify-otp', [AuthController::class, 'verifyOTP']);
Route::post('/new-register', [AuthController::class, "register"])->name("user.register");
Route::post('/send-login-link', [AuthController::class, 'sendLoginLink'])->name('sendLoginLink');
Route::get('/login/link', [AuthController::class, 'loginViaLink'])->name('loginViaLink');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/application', [AdminController::class, 'pendingApplication']);
    Route::get('/admin/application-approved', [AdminController::class, 'approvedApplication']);
    Route::get('/admin/application/{id}', [ApplicationController::class, 'editApplication']);
    Route::post('/admin/application/generate/{id}', [ApplicationController::class, 'generateCode']);
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');


    Route::get('admin/settings', [SettingController::class, 'index']);


});


Route::get('/investerform', [InvestorController::class, 'index'])->name('user.investerCodeform');
Route::post('/investerform/submit', [InvestorController::class, 'store'])->name('user.investerCodecheck');
use App\Http\Controllers\DetailsController;

Route::get('/details-form', [InvestorController::class, 'showForm'])->name('details.form');
Route::post('/details-form', [InvestorController::class, 'submitForm'])->name('details.submit');




Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return 'Storage link has been created!';
});

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('optimize:clear');

    return "All Caches are cleared by @Roni";
});

Route::get('/seed', function () {
    Artisan::call('db:seed');

    return "seeder run successfully";
});
