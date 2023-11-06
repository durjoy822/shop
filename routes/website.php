<?php

use App\Http\Controllers\Website\HomeController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('frontend/home');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/shop/product-list', 'productList')->name('product.list');
    Route::get('/shop/product-details', 'productDetails')->name('product.details');//for single product form product list
});