<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\AuthController::class, 'index'])->name('index');
Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::match(['get', 'post'], '/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
//Route::get('login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
