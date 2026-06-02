<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;

// Authentication routes
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Protected API routes
Route::middleware('auth:sanctum')->group(function(){
    Route::apiResource('categories', CategoryController::class)->except(['destroy']);
    Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->middleware('role:admin');

    Route::apiResource('items', ItemController::class)->except(['destroy']);
    Route::delete('items/{item}', [ItemController::class, 'destroy'])->middleware('role:admin');
});

