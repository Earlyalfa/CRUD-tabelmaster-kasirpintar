<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\PegawaiController;

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

// Routes untuk Suplier
Route::get('/suplier', [SuplierController::class, 'index'])->name('suplier.index');
Route::get('/suplier/create', [SuplierController::class, 'create'])->name('suplier.create');
Route::post('/suplier', [SuplierController::class, 'store'])->name('suplier.store');
Route::get('/suplier/{suplier}/edit', [SuplierController::class, 'edit'])->name('suplier.edit');
Route::put('/suplier/{suplier}', [SuplierController::class, 'update'])->name('suplier.update');
Route::delete('/suplier/{suplier}', [SuplierController::class, 'destroy'])->name('suplier.destroy');
Route::get('/suplier/{suplier}', [SuplierController::class, 'show'])->name('suplier.show');

// Routes untuk Produk
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);

// Routes untuk Kategori Produk
Route::get('/kategori', [KategoriProdukController::class, 'index'])->name('kategori.index');
Route::get('/kategori/create', [KategoriProdukController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriProdukController::class, 'store'])->name('kategori.store');
Route::get('/kategori/{kategori}/edit', [KategoriProdukController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{kategori}', [KategoriProdukController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/{kategori}', [KategoriProdukController::class, 'destroy'])->name('kategori.destroy');
Route::get('/kategori/{kategori}', [KategoriProdukController::class, 'show'])->name('kategori.show');

// Routes untuk Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');
Route::post('/pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::get('/pegawai/{pegawai}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::put('/pegawai/{pegawai}', [PegawaiController::class, 'update'])->name('pegawai.update');
Route::delete('/pegawai/{pegawai}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');
Route::get('/pegawai/{pegawai}', [PegawaiController::class, 'show'])->name('pegawai.show');
