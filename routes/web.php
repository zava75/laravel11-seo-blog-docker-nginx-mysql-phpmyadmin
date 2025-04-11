<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', AdminMiddleware::class])->prefix('admin')->group(function () {
//    Route::get('/', [AdminPageController::class, 'index'])->name('admin.index');
});

require __DIR__.'/auth.php';

Route::get('{category}/{child?}', [CategoryController::class, 'show'])
    ->where('category', '[a-zA-Z0-9-_]+')
    ->where('child', '[a-zA-Z0-9-_]+')
    ->name('category.show');
