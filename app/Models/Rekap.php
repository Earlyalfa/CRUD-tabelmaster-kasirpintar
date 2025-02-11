<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekap extends Model
{
    use HasFactory;

    protected $table = 'rekap';

    protected $fillable = [
        'kategori',
        'total_barang_masuk',
        'total_terjual',
        'total_rusak_hilang',
        'stok_akhir',
    ];
}

