<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as Controllers;

Route::get('/auth/redirect', [Controllers\AuthController::class, 'redirect'])->name('redirect');

Route::get('/auth/callback', [Controllers\AuthController::class, 'callback'])->name('callback');
