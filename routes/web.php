<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

Route::get('/', [PageController::class, 'home']);

Route::get('/halo', function () {
    return 'Halo, Laravel berjalan di Docker dan terhubung ke Neon.tech';
});

Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::resource('posts', PostController::class);