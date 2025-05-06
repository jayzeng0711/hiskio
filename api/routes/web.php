<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/posts/latest-report', [PostController::class, 'latestReport']);
Route::get('/', [PostController::class, 'index']);
Route::get('/test', [PostController::class, 'test']);
Route::apiResource('posts', PostController::class);
