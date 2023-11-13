<?php

use App\Http\Controllers\Website\CustomerAuthController;
use App\Http\Controllers\Website\HomeController;
use Illuminate\Support\Facades\Route;




Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about-us', 'aboutUs')->name('about.us');
    Route::get('/contact-us', 'contactUs')->name('contact.us');
    // ----product-----
    Route::get('/shop/category/product-list/{id}', 'productList')->name('product.list');        //category product list
    Route::get('/shop/subcategory/product-list/{id}', 'subCategory')->name('subcategory.list'); //sub category product list
    Route::get('/shop/product-details/{id}', 'productDetails')->name('product.details');
    // -----blog-------
    // Route::get('/shop/blog/category/blog-list/{id}', 'productList')->name('product.list');        //category product list
    Route::get('/shop/blog-list/{id}', 'blogList')->name('blog.list');
    Route::get('/shop/blog-details/{id}', 'blogDetails')->name('blog.details');


});
Route::controller(CustomerAuthController::class)->group(function () {
    Route::get('/shop/login', 'customerLogin')->name('customer.login');
    Route::get('/shop/register', 'customerRegister')->name('customer.register');

});