<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

// register dinonaktifkan
Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route Admin
Route::prefix('admin')->group(function () {

});

// Route Frontend
Route::get('/', [FrontController::class, 'index']);
Route::get('/about', [FrontController::class, 'about']);
Route::get('/article', [FrontController::class, 'article']);
Route::get('/article/{id}', [FrontController::class, 'articleShow']);
