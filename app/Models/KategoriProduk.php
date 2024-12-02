<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;

    // menentukan kolom
    protected $fillable = [
        'id_kategori',
        'nama_kategori',
    ];

    protected $table = 'kategori_produks';

    protected $primaryKey = 'id_kategori';
}

