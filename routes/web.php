<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
