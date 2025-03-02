<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\User;

Route::get('/', [UserController::class, 'home'])->name('homepage');
// Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/services', [UserController::class, 'services'])->name('services');
Route::get('/privacy-policy', [UserController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/Terms-of-Service', [UserController::class, 'termsOfService'])->name('Terms-of-Service');


Route::resource('contacts', ContactController::class);

Route::get('/login', function () {
    $data['logo'] = Setting::first();
    $user = Auth::user();
    if (!$user) {
        return view('auth.login', $data);
    }
    return redirect('/dashboard');
})->name('login');

Route::get('/verification', function () {
    $data['logo'] = Setting::first();
    $user = Auth::user();
    if (!$user) {
        return view('auth.verification', $data);
    }
    return redirect('/dashboard');
});

Route::get('/register', function () {
    $data['logo'] = Setting::first();
    $user = Auth::user();
    if (!$user) {
        return view('auth.register', $data);
    }
    return redirect('/dashboard');
});

Route::get('/verify-otp', function (Request $request) {
    $email = $request->query('email');
    $first_name = $request->query('first_name');
    $last_name = $request->query('last_name');
    $mobile = $request->query('mobile');
    $parent_id = $request->query('parent_id');
    $logo = Setting::first();

    if (!$email) {
        return redirect('/register')->with('error', 'Email parameter is missing.');
    }

    return view('auth.verify-otp', compact('email', 'logo'));
})->name('verify-otp');



Route::get('/get-referred-user/{parent_id}', function ($parent_id) {
    $user = User::where('referral_id', $parent_id)->first();

    if ($user) {
        return response()->json(['name' => $user->first_name . ' ' . $user->last_name]);
    } else {
        return response()->json(['name' => null]);
    }
});


Route::post('/send-otp', [AuthController::class, 'sendOTP'])->middleware('throttle:5,1');
Route::post('/verify-otp', [AuthController::class, 'verifyOTP']);
Route::post('/new-register', [AuthController::class, "register"])->name("user.register");
Route::post('/new-register-verify', [AuthController::class, "verifyRegisterOTP"])->name("user.register.verify");
Route::post('/send-login-link', [AuthController::class, 'sendLoginLink'])->name('sendLoginLink');
Route::get('/login/link', [AuthController::class, 'loginViaLink'])->name('loginViaLink');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/member', [UserController::class, 'member'])->name('member-details');

    Route::get('/details/{id}', [UserController::class, 'personalInvestorDetails'])->name('details');
    Route::get('additional-document/show-form', [UserController::class, 'showForm'])->name('additionalDocument.show');

    Route::put('/additional-document/store', [UserController::class, 'uploadAdditionalDocument'])->name('additional_document');


    Route::get('/investerform', [InvestorController::class, 'index'])->name('user.investerCodeform');
    Route::post('/investerform/submit', [InvestorController::class, 'store'])->name('user.investerCodecheck');
    Route::get('/details-form', [InvestorController::class, 'showForm'])->name('details.form');
    Route::post('/details-form', [InvestorController::class, 'submitForm'])->name('details.submit');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/application', [AdminController::class, 'pendingApplication'])->name('pending-application');
    Route::get('/admin/application-approved', [AdminController::class, 'approvedApplication']);
    // Route::get('/admin/rejected-applications', [AdminController::class, 'showRejectedApplications'])->name('admin.rejectedApplications');
    Route::post('/application/reject/{id}', [ApplicationController::class, 'rejectApplication'])->name('application.reject');


    Route::get('/admin/application/{id}', [ApplicationController::class, 'editApplication']);
    Route::post('/admin/application/reject/{id}', [ApplicationController::class, 'rejectApplication']);

    Route::post('/admin/application/generate/{id}', [ApplicationController::class, 'generateCode']);
    Route::post('/admin/application/approve/{id}', [ApplicationController::class, 'approveCode']);
    Route::get('/admin/contact', [AdminController::class, 'contact'])->name('admin.contact.manage');
    Route::get('admin/contact-view/{contact}', [AdminController::class, 'editContact'])->name('admin.contact.show');
    Route::put('/contact-view/{contact}', [AdminController::class, 'updateContact'])->name('admin.contact.update');

    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('admin/settings', [SettingController::class, 'index']);
});

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return 'Storage link has been created!';
});

Route::get('forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('forgot-password', [AuthController::class, 'sendPasswordResetLink'])->name('password.email');
Route::get('reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('reset-password', [AuthController::class, 'resetPassword'])->name('password.update');


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
Route::get('/seed-admin', function () {
    Artisan::call('db:seed', [
        '--class' => 'AdminSeeder'
    ]);
    return "AdminSeeder has been run successfully!";
});

Route::get('/deal-admin', function () {
    Artisan::call('db:seed', [
        '--class' => 'DealindiaSeeder'
    ]);
    return "Daelindia Seeder has been run successfully!";
});
Route::get('/analytics', [AdminController::class, 'getVisitorsData']);
