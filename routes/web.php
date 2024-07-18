<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProductController;

// User Route 
Route::get('/', function () {
    return view('user.index');
});


// ==================== Admin Route ======================= //
// ==================== =========== ======================= //

Route::controller(AdminController::class)->prefix('admin')->group(function(){
    Route::get('login', 'login')->name('admin.login.get');
    Route::post('login', 'AdminLogin')->name('login.post');

    Route::get('register', 'Register')->name('admin.register.get');
    Route::post('register', 'AdminRegister')->name('admin.register.post');

    Route::middleware(['IsAdmin'])->group(function(){
        Route::get('dashboard', 'dashboard')->name('dashboard');
        Route::get('profile', 'profile')->name('admin.profile');
        Route::get('change/password', 'showChangePasswordForm')->name('admin.change.password.form');
        Route::post('change/password', 'changePassword')->name('admin.change.password');
        Route::get('logout', 'logout')->name('admin.logout');
    });
});

Route::controller(ProductController::class)->middleware(['IsAdmin'])->prefix('admin')->group(function(){
    Route::get('product', 'product')->name('admin.product');
});

