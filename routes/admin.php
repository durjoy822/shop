<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;



Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/user', 'user')->name('user');
    Route::get('/user/add', 'userAdd')->name('user.add');
});
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::get('/forgot', 'forgot')->name('forgot');
});


