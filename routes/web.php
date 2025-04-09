<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name('index');
Route::get('{category}', [CategoryController::class, 'showCategory'])
    ->where('category', '[a-zA-Z0-9-_]+')
    ->name('showCategory');

Route::prefix('admin')->group(function () { Route::get('categories',
    [CategoryController::class, 'index'])->name('admin.categories.index'); });
