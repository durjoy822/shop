<?php

use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\CheckoutController;
use App\Http\Controllers\Website\CustomerAuthController;
use App\Http\Controllers\Website\CustomerDashboardController;
use App\Http\Controllers\Website\HomeController;
use Illuminate\Support\Facades\Route;





// -----customer auth-------
Route::middleware(customer::class)->group(function () {
    Route::get('/shop/customer/logout',[CustomerAuthController::class,'customerLogout'])->name('customer.logout');

});
Route::controller(CustomerAuthController::class)->group(function () {
    Route::get('/shop/login', 'customerLogin')->name('customer.login');
    Route::get('/shop/register', 'customerRegister')->name('customer.register');
    Route::post('/shop/customer/store', 'customerStore')->name('customer.store');
    Route::post('/shop/customer/login/check', 'customerLoginCheck')->name('customer.login.check');

});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about-us', 'aboutUs')->name('about.us');
    Route::get('/contact-us', 'contactUs')->name('contact.us');
    // ----product-----
    Route::get('/shop/category/product-list/{id}', 'productList')->name('product.list');        //category product list
    Route::get('/shop/subcategory/product-list/{id}', 'subCategory')->name('subcategory.list'); //sub category product list
    Route::get('/shop/product-details/{id}', 'productDetails')->name('product.details');
    // -----blog-------
    Route::get('/shop/blog-list/{id}', 'blogList')->name('blog.list');
    Route::get('/shop/blog-details/{id}', 'blogDetails')->name('blog.details');


});


    // -----customer dashboard-------
Route::controller(CustomerDashboardController::class)->group(function () {
    Route::get('/shop/dashboard', 'customerDashboard')->name('customer.dashboard');


});
    // -----Cart -------
Route::controller(CartController::class)->group(function () {
    Route::get('/shop/cart', 'cart')->name('cart');
    Route::post('/shop/cart/add/{id}', 'cartAdd')->name('cart.add');
    Route::get('/shop/cart/delete/{id}', 'cartDelete')->name('cart.delete');
    Route::get('/shop/cart/all/remove', 'cartAllRemove')->name('cart.remove');
    Route::post('/shop/cart/update/{id}', 'cartUpdate')->name('cart.update');

});
    // -----Checkout   -------
Route::controller(CheckoutController::class)->group(function () {
    Route::get('/shop/checkout', 'checkout')->name('checkout');
    Route::post('/shop/confirm/order', 'confirmOrder')->name('confirm.order');

});