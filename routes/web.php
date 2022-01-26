<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\Admin\MealController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\ReasonController;
use Illuminate\Support\Facades\Route;


Route::prefix('/admin')->group(function () {

    Route::view('/login', 'admin.auth.login');

    Route::view('/reset-password', 'admin.auth.reset-password');

    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('/inventory', InventoryController::class);

    Route::resource('/notice', NoticeController::class);

    Route::resource('/meal', MealController::class);

    Route::resource('/package', PackageController::class);

    Route::resource('/reason', ReasonController::class);
});
