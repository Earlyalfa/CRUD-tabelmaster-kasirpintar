<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendapatan extends Model
{
    use HasFactory;

    protected $table = 'pendapatan'; 
    protected $fillable = [
        'tanggal', 
        'no_transaksi', 
        'pendapatan', 
        'metode_pembayaran',
    ];

    protected $dates = [
        'tanggal', 
    ];
}