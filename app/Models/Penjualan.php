<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualan'; // Nama tabel di database

    protected $fillable = [
        'tanggal_waktu',
        'no_transaksi',
        'nama_kasir',
        'barang_terjual',
        'metode_pembayaran',
        'diskon',
        'total_harga',
        'jumlah'
    ];

    protected $casts = [
        'tanggal_waktu' => 'datetime',
        'barang_terjual' => 'array', // Otomatis mengubah JSON menjadi array
    ];
}