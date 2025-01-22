<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiskonPromosi extends Model
{
    use HasFactory;

    protected $table = 'diskon_promosi'; // Nama tabel

    protected $fillable = [
        'tanggal',
        'kode_promo',
        'nama_promo',
        'barang_diskon',
        'jenis_diskon',
        'jumlah_terjual',
        'total_diskon',
        'total_penjualan',
        'keterangan',
    ];
}

