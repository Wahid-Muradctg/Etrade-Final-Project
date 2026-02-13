<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;





//* Backend Route
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


Route::prefix('/category')
    ->name('category.')
    ->controller(CategoryController::class)
    ->group(function(){
        Route::get('/{id?}', 'showCategory')->name('show');
        Route::post('/store', 'storeCategory')->name('store');
        Route::get('/delete/{id}', 'deleteCategory')->name('delete');
        Route::post('/update/{id}', 'updateCategory')->name('update');

    });


Route::prefix('/product')
    ->name('product.')
    ->controller(ProductController::class)
    ->group(function(){
        Route::get('/addproduct', 'addProduct')->name('add');
        
    });


Route::prefix('/product')
    ->name('product.')
    ->controller(ProductController::class)
    ->group(function(){
        Route::get('/productlist', 'productList')->name('list');
        
        
    });



