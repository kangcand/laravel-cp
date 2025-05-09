<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

// register dinonaktifkan
Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route Admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', [AdminController::class, 'index']);
});

// Route Frontend
Route::get('/', [FrontController::class, 'index']);
Route::get('/about', [FrontController::class, 'about']);
Route::get('/article', [FrontController::class, 'article']);
Route::get('/article/{id}', [FrontController::class, 'articleShow']);
