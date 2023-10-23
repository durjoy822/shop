<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RoleController;
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
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::get('/forgot', 'forgot')->name('forgot');

    Route::post('/register/store', 'registerStore')->name('register.info');
    Route::post('/login/check', 'loginCheck')->name('login.check');

});



Route::resource('/categories', CategoryController::class);
Route::resource('/subcategories',SubcategoryController::class);
<<<<<<< HEAD
Route::resource('/units',UnitController::class);
=======
Route::resource('/brands',BrandController::class);



>>>>>>> e2a653fad78d65b024190dbb160f80f1823c57c6
