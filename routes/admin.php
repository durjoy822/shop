<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 




Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

Route::controller(UserController::class)->group(function () {
    Route::get('user', 'user')->name('user');
});


