<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as Controllers;

Route::get('/auth/redirect', [Controllers\AuthController::class, 'redirect'])->name('redirect');

Route::get('/auth/callback', [Controllers\AuthController::class, 'callback'])->name('callback');

Route::get('/auth/logout', [Controllers\AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function() {
    Route::get('/admin/profile', [Controllers\User\ProfileController::class, 'index']);
    Route::post('/post/save', [Controllers\PostController::class, 'save'])->name('post.save');
});
