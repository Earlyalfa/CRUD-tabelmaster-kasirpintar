<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    use HasFactory;

    protected $table = 'keuangan';

    protected $fillable = [
        'tanggal',
        'pendapatan',
        'pengeluaran',
        'kategori',
        'profit_bersih',
    ];

    public $timestamps = true;  
}

