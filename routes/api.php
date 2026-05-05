<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function () {
    return response()->json(['message' => 'API Laravel Berhasil!'], 200);
});

use App\Http\Controllers\BarangController;

Route::get('/barang', [BarangController::class, 'index']);
