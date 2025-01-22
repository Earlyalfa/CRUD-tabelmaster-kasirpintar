<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DiskonController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\PendapatanController;
use App\Http\Controllers\BulananController;
use App\Http\Controllers\DiskonPromosiController;
use App\Http\Controllers\LastokController;

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

// Routes untuk Penjualan
Route::apiResource('penjualan', penjualanController::class);

// Routes untuk Keuangan
Route::apiResource('keuangan', keuanganController::class);

// Routes untuk Pengeluaran
Route::apiResource('pengeluaran', pengeluaranController::class);

// Routes untuk Pendapatan
Route::apiResource('pendapatan', pendapatanController::class);

// Routes untuk Bulanan
Route::apiResource('bulanan', bulananController::class);

// Routes untuk DiskonPromosi
Route::apiResource('diskon_promosi', diskonpromosiController::class);

// Routes untuk LaporanStok
Route::apiResource('lastok', lastokController::class);