<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bulanan extends Model
{
    use HasFactory;
    
    protected $table = 'bulanan';
    protected $fillable = [
        'bulan', 'pendapatan', 'pengeluaran', 'laba_kotor', 'profit_bersih'
    ];
}

