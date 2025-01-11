<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    // Tentukan nama tabel (opsional jika tabel sesuai dengan nama model)
    protected $table = 'kategori';

    // Tentukan kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'kategori',  // Kolom kategori pada tabel
    ];

    // Jika kolom created_at dan updated_at tidak digunakan, kamu bisa menonaktifkannya
    public $timestamps = true;
}

