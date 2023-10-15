<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\OptimizeController;



Route::resource('/roles',RoleController::class);

Route::get('/optimize',[OptimizeController::class,'optimize'])->name('optimize');
Route::get('/optimize/clear',[OptimizeController::class,'optimizeClear'])->name('optimize.clear');
Route::get('/migrate',[OptimizeController::class,'runMigrate'])->name('artisan.migrate');
Route::get('/migrate/fresh/seed',[OptimizeController::class,'migrateFreshSeed'])->name('artisan.migrate.fresh.seed');
