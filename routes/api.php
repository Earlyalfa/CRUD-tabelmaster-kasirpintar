<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DiskonController;
use App\Http\Controllers\TransaksiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Routes untuk Suplier
Route::apiResource('suplier', SuplierController::class);

// Routes untuk Produk
Route::apiResource('produk', ProdukController::class);

// Routes untuk Kategori 
Route::apiResource('kategori', kategoriController::class);

// Routes untuk Pegawai
Route::apiResource('pegawai', PegawaiController::class);

// Routes untuk Diskon
Route::apiResource('diskon', diskonController::class);

// Routes untuk Transaksi
Route::apiResource('transaksi', transaksiController::class);