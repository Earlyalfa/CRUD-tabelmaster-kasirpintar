<?php

namespace Database\Seeders;

use App\Models\KategoriProduk;
use Illuminate\Database\Seeder;

class KategoriProdukSeeder extends Seeder
{
    public function run()
    {
        // Menambahkan data kategori produk hanya jika belum ada
        KategoriProduk::firstOrCreate(
            ['id_kategori' => 'K001'], 
            ['nama_kategori' => 'Aksesoris'] 
        );

        KategoriProduk::firstOrCreate(
            ['id_kategori' => 'K002'],
            ['nama_kategori' => 'Fashion']
        );
    }
}

