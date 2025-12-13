<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelangganController;

// Auth (public)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login',    [AuthController::class, 'login']);

// Semua CRUD di-protect dengan auth:sanctum
Route::middleware('auth:sanctum')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);

    // KATEGORI
    Route::get('/kategori/read',     [KategoriController::class, 'readAll']);
    Route::get('/kategori/read/{id}',     [KategoriController::class, 'readOne']);
    Route::post('/kategori/create',  [KategoriController::class, 'create']);
    Route::put('/kategori/update/{id}',   [KategoriController::class, 'update']);
    Route::delete('/kategori/delete/{id}', [KategoriController::class, 'delete']);

    // PRODUK
    Route::get('/produk/read',     [ProdukController::class, 'readAll']);
    Route::get('/produk/read/{id}',     [ProdukController::class, 'readOne']);
    Route::post('/produk/create',  [ProdukController::class, 'create']);
    Route::put('/produk/update/{id}',   [ProdukController::class, 'update']);
    Route::delete('/produk/delete/{id}', [ProdukController::class, 'delete']);

    // PELANGGAN
    Route::get('/pelanggan/read',     [PelangganController::class, 'readAll']);
    Route::get('/pelanggan/read/{id}',     [PelangganController::class, 'readOne']);
    Route::post('/pelanggan/create',  [PelangganController::class, 'create']);
    Route::put('/pelanggan/update/{id}',   [PelangganController::class, 'update']);
    Route::delete('/pelanggan/delete/{id}', [PelangganController::class, 'delete']);
});
