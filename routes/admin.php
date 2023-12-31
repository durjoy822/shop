<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EmailsentsController;
use App\Http\Controllers\Admin\ForgotPasswordController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\SpacialProductController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\TeamController;
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
    Route::post('/forgot/email', 'forgotEmail')->name('forgot.email.submit');
    Route::get('/reset/{token}', 'resetForm')->name('reset.form');
    Route::post('/new/password', 'newPassword')->name('new.password');

});
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::get('/forgot', 'forgot')->name('forgot');

    Route::post('/register/store', 'registerStore')->name('register.info');
    Route::post('/login/check', 'loginCheck')->name('login.check');

});

Route::controller(EmailsentsController::class)->group(function () {
    Route::get('/email/index', 'index')->name('email.index');
    Route::get('/email/create/{id}', 'create')->name('email.create');
    Route::post('/email/sent', 'emailSent')->name('email.sent');

});

Route::controller(OrderController::class)->group(function () {
    Route::get('order/index', 'orderIndex')->name('order.index');
    Route::get('order/details/{id}', 'orderDetails')->name('order.details');
    Route::get('order/edit/{id}', 'orderEdit')->name('order.edit');
    Route::get('order/invoice/{id}', 'orderInvoice')->name('order.invoice');
    Route::get('order/invoice/download/{id}', 'invoiceDownload')->name('invoice.download');
    Route::get('order/delete/{id}', 'orderDelete')->name('order.delete');

});

Route::get('/get/getCategory',[DashboardController::class,'getCategory'])->name('getCategory');//for get all sub category item


Route::resource('/categories', CategoryController::class);
Route::resource('/subcategories',SubcategoryController::class);
Route::resource('/units',UnitController::class);
Route::resource('/brands',BrandController::class);
Route::resource('/products',ProductController::class);
Route::resource('/blogs',BlogController::class);
Route::resource('/blogscategories',BlogCategoryController::class);
Route::resource('/spacial_products',SpacialProductController::class);
Route::resource('/reviews',ReviewController::class);
Route::resource('/teams',TeamController::class);
Route::resource('/about_us',AboutUsController::class);
Route::resource('/banners',BannerController::class);