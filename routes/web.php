<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'show']);
Route::get('/writers', [WriterController::class, 'index']);
Route::get('/writers/{id}', [WriterController::class, 'show']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/popular', [PopularController::class, 'index']);
