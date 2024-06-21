<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/gallery', [PageController::class, 'gallery']);
Route::get('/contact', [PageController::class, 'contact']);