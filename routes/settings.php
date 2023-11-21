<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\OptimizeController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SocialLoginController;
use App\Http\Controllers\Admin\UsersInfoController;

Route::get('/optimize',[OptimizeController::class,'optimize'])->name('optimize');
Route::get('/optimize/clear',[OptimizeController::class,'optimizeClear'])->name('optimize.clear');
Route::get('/migrate',[OptimizeController::class,'runMigrate'])->name('artisan.migrate');
Route::get('/migrate/fresh/seed',[OptimizeController::class,'migrateFreshSeed'])->name('artisan.migrate.fresh.seed');


Route::controller(SocialLoginController::class)->group(function () {
    Route::get('/auth/google', 'LoginGoogle')->name('google');
    Route::any('/auth/google/callback', 'GoogleCallback')->name('google.callback');

    Route::get('/auth/facebook', 'LoginGoogle')->name('facebook');
    Route::any('/auth/facebook/callback', 'GoogleCallback')->name('facebook.callback');

});


Route::controller(SettingController::class)->group(function () {
    Route::get('/settings/edit', 'settingEdit')->name('setting.edit');
    Route::post('/settings/update/{id}', 'settingUpdate')->name('setting.update');

});


Route::controller(UsersInfoController::class)->group(function () {
    Route::get('/user/info/index', 'userIndex')->name('user.profile');
    Route::post('/user/info/update/{id}', 'userInfoUpdate')->name('user.info.update');

});






Route::resource('/roles',RoleController::class);