<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::group([], function ($api) {
    $api->get('/', [HomeController::class, 'index']);
});

Route::get('/posts/latest-report', [PostController::class, 'latestReport']);
Route::get('/test', [PostController::class, 'test']);
Route::apiResource('posts', PostController::class);
