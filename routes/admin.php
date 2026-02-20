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

// add product routes
Route::prefix('/product')
    ->name('product.')
    ->controller(ProductController::class)
    ->group(function(){
        Route::get('/addproduct/{id}', 'addProduct')->name('add');
        Route::post('/storeproduct','storeProduct')->name('storproduct');
        
    });

// product list routes
Route::prefix('/product')
    ->name('product.')
    ->controller(ProductController::class)
    ->group(function(){
        Route::get('/productlist', 'productList')->name('list');
        Route::get('/deleteproduct/{id}','deleteProduct')->name('deleteproduct');
        Route::post('/updateproduct/{id}','updateProduct')->name('updateproduct');
    });



