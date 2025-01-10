<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diskon extends Model
{
    use HasFactory;

    protected $table = 'diskon'; 
    protected $fillable = [
        'name', 'value', 'min_purchase', 'start_date', 'end_date', 'status',
    ];
}

