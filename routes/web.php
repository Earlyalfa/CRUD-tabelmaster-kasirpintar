<?php

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

// Halaman Utama
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Routes untuk Suplier
Route::get('/suplier', [SuplierController::class, 'index'])->name('suplier.index'); 
Route::get('/suplier/create', [SuplierController::class, 'create'])->name('suplier.create'); 
Route::post('/suplier', [SuplierController::class, 'store'])->name('suplier.store');
Route::get('/suplier/{suplier}/edit', [SuplierController::class, 'edit'])->name('suplier.edit'); 
Route::put('/suplier/{suplier}', [SuplierController::class, 'update'])->name('suplier.update'); 
Route::delete('/suplier/{id}', [SuplierController::class, 'destroy'])->name('suplier.destroy'); 

// Routes untuk Produk
Route::get('produk', [ProdukController::class, 'index'])->name('produk.index');  
Route::get('produk/create', [ProdukController::class, 'create'])->name('produk.create');  
Route::post('produk', [ProdukController::class, 'store'])->name('produk.store');  
Route::get('produk/{id}/edit', [ProdukController::class, 'edit'])->name('produk.edit');  
Route::put('produk/{id}', [ProdukController::class, 'update'])->name('produk.update');  
Route::delete('produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');  

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
Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');  
Route::put('/pegawai/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');  
Route::delete('/pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');  

// Rotes untuk Diskon
Route::get('diskon', [DiskonController::class, 'index'])->name('diskon.index'); 
Route::get('diskon/create', [DiskonController::class, 'create'])->name('diskon.create'); 
Route::post('diskon', [DiskonController::class, 'store'])->name('diskon.store'); 
Route::get('diskon/{id}/edit', [DiskonController::class, 'edit'])->name('diskon.edit');
Route::put('diskon/{id}', [DiskonController::class, 'update'])->name('diskon.update'); 
Route::delete('diskon/{id}', [DiskonController::class, 'destroy'])->name('diskon.destroy'); 

// Transaksi
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create');
Route::post('/transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');
Route::get('/transaksi/{id}', [TransaksiController::class, 'show'])->name('transaksi.show');
Route::get('/transaksi/{id}/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit');
Route::put('/transaksi/{id}', [TransaksiController::class, 'update'])->name('transaksi.update');
Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');

// Penjualan
Route::get('/penjualan', [PenjualanController::class, 'index'])->name('penjualan.index');
Route::get('/penjualan/create', [PenjualanController::class, 'create'])->name('penjualan.create');
Route::post('/penjualan', [PenjualanController::class, 'store'])->name('penjualan.store');
Route::get('/penjualan/{id}', [PenjualanController::class, 'show'])->name('penjualan.show');
Route::get('/penjualan/{id}/edit', [PenjualanController::class, 'edit'])->name('penjualan.edit');
Route::put('/penjualan/{id}', [PenjualanController::class, 'update'])->name('penjualan.update');
Route::delete('/penjualan/{id}', [PenjualanController::class, 'destroy'])->name('penjualan.destroy');

// Keuangan
Route::get('/keuangan', [KeuanganController::class, 'index'])->name('keuangan.index');
Route::get('/keuangan/create', [KeuanganController::class, 'create'])->name('keuangan.create');
Route::post('/keuangan', [KeuanganController::class, 'store'])->name('keuangan.store');
Route::get('/keuangan/{id}', [KeuanganController::class, 'show'])->name('keuangan.show');
Route::get('/keuangan/{id}/edit', [KeuanganController::class, 'edit'])->name('keuangan.edit');
Route::put('/keuangan/{id}', [KeuanganController::class, 'update'])->name('keuangan.update');
Route::delete('/keuangan/{id}', [KeuanganController::class, 'destroy'])->name('keuangan.destroy');

// Pengeluaran
Route::get('/pengeluaran', [PengeluaranController::class, 'index'])->name('pengeluaran.index');
Route::get('/pengeluaran/create', [PengeluaranController::class, 'create'])->name('pengeluaran.create');
Route::post('/pengeluaran', [PengeluaranController::class, 'store'])->name('pengeluaran.store');
Route::get('/pengeluaran/{id}', [PengeluaranController::class, 'show'])->name('pengeluaran.show');
Route::get('/pengeluaran/{id}/edit', [PengeluaranController::class, 'edit'])->name('pengeluaran.edit');
Route::put('/pengeluaran/{id}', [PengeluaranController::class, 'update'])->name('pengeluaran.update');
Route::delete('/pengeluaran/{id}', [PengeluaranController::class, 'destroy'])->name('pengeluaran.destroy');

// Pendapatan
Route::get('pendapatan', [PendapatanController::class, 'index'])->name('pendapatan.index'); 
Route::get('pendapatan/create', [PendapatanController::class, 'create'])->name('pendapatan.create'); 
Route::post('pendapatan', [PendapatanController::class, 'store'])->name('pendapatan.store'); 
Route::get('pendapatan/{id}', [PendapatanController::class, 'show'])->name('pendapatan.show'); 
Route::get('pendapatan/{id}/edit', [PendapatanController::class, 'edit'])->name('pendapatan.edit'); 
Route::put('pendapatan/{id}', [PendapatanController::class, 'update'])->name('pendapatan.update'); 
Route::delete('pendapatan/{id}', [PendapatanController::class, 'destroy'])->name('pendapatan.destroy'); 

// Bulanan
Route::get('bulanan', [BulananController::class, 'index'])->name('bulanan.index');
Route::get('bulanan/create', [BulananController::class, 'create'])->name('bulanan.create');
Route::post('bulanan', [BulananController::class, 'store'])->name('bulanan.store');
Route::get('bulanan/{id}/edit', [BulananController::class, 'edit'])->name('bulanan.edit');
Route::put('bulanan/{id}', [BulananController::class, 'update'])->name('bulanan.update');
Route::delete('bulanan/{id}', [BulananController::class, 'destroy'])->name('bulanan.destroy');

