<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;





//* Backend Route
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


Route::prefix('/category')
    ->name('category.')
    ->controller(CategoryController::class)
    ->group(function(){
        Route::get('/', 'showCategory')->name('show');
        Route::post('/store', 'storeCategory')->name('store');
    });


