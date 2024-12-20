<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuplierController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/suplier', [\App\Http\Controllers\SuplierController::class, 'index']); 

// Routes untuk Kategori Produk
Route::get('/kategori', [KategoriProdukController::class, 'index'])->name('kategori.index');
Route::get('/kategori/create', [KategoriProdukController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriProdukController::class, 'store'])->name('kategori.store');
Route::get('/kategori/{id}/edit', [KategoriProdukController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{id}', [KategoriProdukController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/{id}', [KategoriProdukController::class, 'destroy'])->name('kategori.destroy');