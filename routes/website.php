<?php

use App\Http\Controllers\Website\HomeController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('frontend/home');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
});
