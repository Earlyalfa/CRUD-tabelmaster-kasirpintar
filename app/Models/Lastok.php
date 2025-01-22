<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lastok extends Model
{
    use HasFactory;

    protected $table = 'lastok'; // Nama tabel
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'kategori',
        'stok_awal',
        'barang_masuk',
        'barang_terjual',
        'barang_rusak',
        'stok_akhir',
        'keterangan',
    ];
}
