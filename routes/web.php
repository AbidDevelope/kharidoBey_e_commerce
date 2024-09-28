<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ForgotPasswordController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
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
});

Route::controller(ForgotPasswordController::class)->prefix('admin')->group(function() {
   Route::get('forgot_password', 'showForgetPasswordForm')->name('forgot.password');
   Route::post('forgot_password', 'submitForgotPasswordForm')->name('forgot.password.submit');
});

Route::middleware(['IsAdmin'])->group(function() {
    Route::controller(AuthController::class)->prefix('admin')->group(function(){
        Route::get('dashboard', 'dashboard')->name('dashboard');
        Route::get('profile', 'profile')->name('admin.profile');
        Route::post('profile', 'profileUpdate')->name('admin.profile.update');
        Route::get('change/password', 'showChangePasswordForm')->name('admin.change.password.form');
        Route::post('change/password', 'changePassword')->name('admin.change.password');
        Route::get('logout', 'logout')->name('admin.logout');
    });

    Route::controller(CategoryController::class)->prefix('admin')->group(function (){
        Route::get('categories', 'categories')->name('categories');
        Route::get('category/add', 'CategoryForm')->name('category');
        Route::post('category/add', 'submitCategory')->name('category.submit');
        Route::get('categories/edit/{id}', 'categoryEdit')->name('categories/edit');
        Route::put('categories/update/{id}', 'categoryUpdate')->name('categories/update');
        Route::get('categories/delete/{id}', 'categoryDelete')->name('categories/delete');
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

    Route::controller(SubCategoryController::class)->prefix('admin')->group(function(){
        Route::get('sub_categories', 'subCategories')->name('sub_categories');
        Route::get('sub_categories/add', 'addSubCategory')->name('add.sub_categories');
        Route::post('subCategory.submit', 'subCategorySubmit')->name('subCategory.submit');
        Route::get('sub_categories/delete/{id}', 'subCategoriesDelete')->name('sub_categories/delete');
        Route::get('get-slug', function(Request $request){
           $subCategorySlug = '';
           if(!empty($request->title)) {
            $subCategorySlug = Str::slug($request->title);
           }
           return response()->json([
            'status' => true,
            'slug'  => $subCategorySlug
            ]);
        })->name('get-slug');
    });

    Route::controller(ProductController::class)->prefix('admin')->group(function(){
        Route::get('product', 'product')->name('admin.product');
    });
});
