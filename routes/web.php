<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DiskonController;

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

// Routes untuk Suplier
Route::get('/suplier', [SuplierController::class, 'index'])->name('suplier.index'); // GET: Menampilkan daftar suplier
Route::get('/suplier/create', [SuplierController::class, 'create'])->name('suplier.create'); // GET: Menampilkan form tambah suplier
Route::post('/suplier', [SuplierController::class, 'store'])->name('suplier.store'); // POST: Menyimpan suplier baru
Route::get('/suplier/{suplier}/edit', [SuplierController::class, 'edit'])->name('suplier.edit'); // GET: Menampilkan form edit suplier
Route::put('/suplier/{suplier}', [SuplierController::class, 'update'])->name('suplier.update'); // PUT: Mengupdate suplier
Route::delete('/suplier/{id}', [SuplierController::class, 'destroy'])->name('suplier.destroy'); // DELETE: Menghapus suplier


// Routes untuk Produk


// Routes untuk Kategori
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');


// Routes untuk Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');
Route::post('/pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::get('/pegawai/{pegawai}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::put('/pegawai/{pegawai}', [PegawaiController::class, 'update'])->name('pegawai.update');
Route::delete('/pegawai/{pegawai}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');
Route::get('/pegawai/{pegawai}', [PegawaiController::class, 'show'])->name('pegawai.show');

// Rotes untuk Diskon
Route::get('diskon', [DiskonController::class, 'index'])->name('diskon.index'); // Menampilkan semua diskon
Route::get('diskon/create', [DiskonController::class, 'create'])->name('diskon.create'); // Menampilkan form tambah diskon
Route::post('diskon', [DiskonController::class, 'store'])->name('diskon.store'); // Menyimpan data diskon
Route::get('diskon/{id}/edit', [DiskonController::class, 'edit'])->name('diskon.edit'); // Menampilkan form edit
Route::put('diskon/{id}', [DiskonController::class, 'update'])->name('diskon.update'); // Mengupdate data
Route::delete('diskon/{id}', [DiskonController::class, 'destroy'])->name('diskon.destroy'); // Menghapus data



