<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'transaksis';

    // Kolom yang dapat diisi
    protected $fillable = [
        'tanggal_transaksi',
        'id_produk',
        'nama_produk',
        'kategori',
        'jumlah',
        'harga_satuan',
        'sub_total',
        'total_transaksi',
        'diskon',
        'metode_pembayaran',
        'status_pembayaran',
    ];

    // Mengaktifkan timestamps
    public $timestamps = true;
}
