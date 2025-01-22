<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Rekap;

class RekapSeeder extends Seeder
{
    public function run()
    {
        DB::table('rekap')->insert([
            [
                'kategori' => 'Kemeja',
                'total_barang_masuk' => 50,
                'total_terjual' => 120,
                'total_rusak_hilang' => 5,
                'stok_akhir' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori' => 'Celana',
                'total_barang_masuk' => 30,
                'total_terjual' => 80,
                'total_rusak_hilang' => 2,
                'stok_akhir' => 48,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori' => 'Jaket',
                'total_barang_masuk' => 20,
                'total_terjual' => 30,
                'total_rusak_hilang' => 3,
                'stok_akhir' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori' => 'Dress',
                'total_barang_masuk' => 40,
                'total_terjual' => 50,
                'total_rusak_hilang' => 1,
                'stok_akhir' => 29,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

