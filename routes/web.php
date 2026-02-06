<?php
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::get('/', [HomeController::class,'homepage'])->name('home');


Auth::routes();

