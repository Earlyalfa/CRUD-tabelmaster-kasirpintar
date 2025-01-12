<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawais';
    protected $fillable = ['nama_pegawai', 'sift_awal', 'sift_akhir',]; 
    public $timestamps = true;  
}
