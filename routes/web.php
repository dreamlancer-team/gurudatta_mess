<?php

use App\Http\Controllers\Admin\MealController;
use App\Http\Controllers\Admin\PackageController;
use Illuminate\Support\Facades\Route;


Route::prefix('/admin')->group(function () {

    Route::view('/dashboard', 'admin/dashboard');

    Route::resource('/meal', MealController::class);

    Route::resource('/package', PackageController::class);
});
