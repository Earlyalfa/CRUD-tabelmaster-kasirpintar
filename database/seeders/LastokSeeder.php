<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lastok;

class LastokSeeder extends Seeder
{
    public function run()
    {
        Lastok::insert([
            [
                'kode_barang' => 'KB001',
                'nama_barang' => 'Kemeja Pria Formal',
                'kategori' => 'Kemeja',
                'stok_awal' => 50,
                'barang_masuk' => 20,
                'barang_terjual' => 40,
                'barang_rusak' => 2,
                'stok_akhir' => 28,
                'keterangan' => 'Perlu restok',
            ],
            [
                'kode_barang' => 'KB002',
                'nama_barang' => 'Celana Jeans Wanita',
                'kategori' => 'Celana',
                'stok_awal' => 30,
                'barang_masuk' => 15,
                'barang_terjual' => 20,
                'barang_rusak' => 0,
                'stok_akhir' => 25,
                'keterangan' => 'Stok aman',
            ],
            [
                'kode_barang' => 'KB003',
                'nama_barang' => 'Jaket Denim',
                'kategori' => 'Jaket',
                'stok_awal' => 10,
                'barang_masuk' => 5,
                'barang_terjual' => 8,
                'barang_rusak' => 1,
                'stok_akhir' => 6,
                'keterangan' => 'Penjualan tinggi',
            ],
            [
                'kode_barang' => 'KB004',
                'nama_barang' => 'Dress Kasual Wanita',
                'kategori' => 'Dress',
                'stok_awal' => 20,
                'barang_masuk' => 10,
                'barang_terjual' => 25,
                'barang_rusak' => 0,
                'stok_akhir' => 5,
                'keterangan' => 'Stok hampir habis',
            ],
        ]);
    }
}

