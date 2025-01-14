<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    protected $table = 'supliers';
    protected $fillable = ['nama', 'alamat', 'email', 'no_hp'];

    public function produks()
    {
        return $this->hasMany(Produk::class, 'id_suplier');
    }
}
