<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;



// Route::get('/dashboard', function () {
//     return view('admin/dashboard');
// });

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



