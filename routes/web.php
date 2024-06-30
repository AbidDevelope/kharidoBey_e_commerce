<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

// User Route 
Route::get('/', function () {
    return view('user.index');
});


// Admin Route
// Route::get('admin', function(){
//     return view('admin.auth.login');
// });

Route::controller(AdminController::class)->prefix('admin')->group(function(){
    Route::get('login', 'login')->name('admin.login.get');
    Route::post('login', 'AdminLogin')->name('login.post');

    Route::get('register', 'Register')->name('admin.register.get');
    Route::post('register', 'AdminRegister')->name('admin.register.post');

    Route::middleware(['IsAdmin'])->group(function(){
        Route::get('dashboard', 'dashboard')->name('admin.dashboard');
    });
});

