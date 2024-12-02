<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;

    // Tentukan kolom yang bisa diisi (fillable)
    protected $fillable = [
        'id_kategori',
        'nama_kategori',
    ];

    // Tentukan nama tabel jika berbeda dengan nama model
    protected $table = 'kategori_produks';

    // Tentukan primary key jika berbeda dengan default 'id'
    protected $primaryKey = 'id_kategori';
}

