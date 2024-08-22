<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ForgotPasswordController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

// User Route 
Route::get('/', function () {
    return view('user.index');
});


// ==================== Admin Route ======================= //
// ==================== =========== ======================= //

Route::controller(AuthController::class)->prefix('admin')->group(function(){
    Route::get('login', 'login')->name('admin.login.get');
    Route::post('login', 'AdminLogin')->name('login.post');

    Route::get('register', 'Register')->name('admin.register.get');
    Route::post('register', 'AdminRegister')->name('admin.register.post');

    Route::middleware(['IsAdmin'])->group(function(){
        Route::get('dashboard', 'dashboard')->name('dashboard');
        Route::get('profile', 'profile')->name('admin.profile');
        Route::post('profile', 'profileUpdate')->name('admin.profile.update');
        Route::get('change/password', 'showChangePasswordForm')->name('admin.change.password.form');
        Route::post('change/password', 'changePassword')->name('admin.change.password');
        Route::get('logout', 'logout')->name('admin.logout');
    });
});

Route::controller(ForgotPasswordController::class)->prefix('admin')->group(function() {
   Route::get('forgot_password', 'showForgetPasswordForm')->name('forgot.password');
   Route::post('forgot_password', 'submitForgotPasswordForm')->name('forgot.password.submit');
});

Route::controller(ProductController::class)->middleware(['IsAdmin'])->prefix('admin')->group(function(){
    Route::get('product', 'product')->name('admin.product');
});

Route::controller(CategoryController::class)->prefix('admin')->group(function (){
    Route::get('category/add', 'CategoryForm')->name('category');
    Route::post('category/add', 'submitCategory')->name('category.submit');

    Route::get('getSlug', function(Request $request) {
        $slug = '';
        if(!empty($request->title)) {
            $slug = Str::slug($request->title);
        }

        return response()->json([
            'status' => true,
            'slug' => $slug
        ]);
    })->name('getSlug');
});

