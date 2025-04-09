<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VerificationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['as' => 'auth.', 'prefix' => 'auth', 'middleware' => 'guest'], function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
    Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');

    Route::post('register', [AuthController::class, 'register'])->middleware('throttle:5,1');

    Route::get('forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
    Route::post('forgot-password', [AuthController::class, 'sendResetLink'])->name('password.email');

    Route::get('reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('password.reset');
    Route::post('reset-password', [AuthController::class, 'resetPassword'])->name('password.update');
});

// User Routes
Route::middleware(['auth', 'user.active'])->group(function () {
    // User dashboard
    Route::group(['as' => 'user.', 'prefix' => 'user'], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/verify-nin', [VerificationController::class, 'index'])->name('verify-nin');
        Route::get('/verify-bvn', [VerificationController::class, 'index'])->name('verify-bvn');
        Route::get('/nin-personalize', [VerificationController::class, 'index'])->name('nin-personalize');
    });
    // Logout Route
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

// // Admin Routes
// Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is_active', 'admin']], function () {
//     Route::get('/dashboard', [DashboardController::class, 'adminIndex'])->name('admin.dashboard');
//  Route::get('/admin/settings', [SiteSettingController::class, 'edit'])->name('settings.edit');
//     Route::put('/admin/settings', [SiteSettingController::class, 'update'])->name('settings.update');
// });
