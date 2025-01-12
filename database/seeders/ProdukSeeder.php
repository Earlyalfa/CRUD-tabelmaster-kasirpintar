<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;
use App\Models\Kategori;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        $fashion = Kategori::where('kategori', 'Fashion')->first();
        $alatTulis = Kategori::where('kategori', 'Alat Tulis')->first();
        $kebutuhanRumahTangga = Kategori::where('kategori', 'Kebutuhan Rumah Tangga')->first();

        Produk::create([
            'nama_produk' => 'Kaos Polos',
            'kode_produk' => 'FSH001',
            'kategori_id' => $fashion->id,
            'harga_beli' => 40000,
            'harga_jual' => 55000,
            'stok' => 50,
            'unit' => 'Pcs',
        ]);

        Produk::create([
            'nama_produk' => 'Buku Catatan A5',
            'kode_produk' => 'AT001',
            'kategori_id' => $alatTulis->id,
            'harga_beli' => 8000,
            'harga_jual' => 12000,
            'stok' => 100,
            'unit' => 'Pcs',
        ]);

        Produk::create([
            'nama_produk' => 'Piring Keramik',
            'kode_produk' => 'KRT001',
            'kategori_id' => $kebutuhanRumahTangga->id,
            'harga_beli' => 120000,
            'harga_jual' => 160000,
            'stok' => 20,
            'unit' => 'Set',
        ]);
    }
}

