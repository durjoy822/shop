<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ForgotPasswordController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\UnitController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;






Route::middleware(user::class)->group(function () {
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

});

Route::controller(UserController::class)->group(function () {
    Route::get('/user', 'user')->name('user');
    Route::get('/user/add', 'userAdd')->name('user.add');
});
Route::controller(ForgotPasswordController::class)->group(function () {
    Route::get('/forgot', 'forgot')->name('forgot.password');

});
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::get('/forgot', 'forgot')->name('forgot');

    Route::post('/register/store', 'registerStore')->name('register.info');
    Route::post('/login/check', 'loginCheck')->name('login.check');

});

Route::get('/get/getCategory',[DashboardController::class,'getCategory'])->name('getCategory');


Route::resource('/categories', CategoryController::class);
Route::resource('/subcategories',SubcategoryController::class);
Route::resource('/units',UnitController::class);
Route::resource('/brands',BrandController::class);
Route::resource('/products',ProductController::class);