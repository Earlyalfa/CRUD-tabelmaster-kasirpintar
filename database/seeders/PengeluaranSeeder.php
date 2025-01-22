<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Pengeluaran;

class PengeluaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengeluaran')->insert([
            ['jenis_pengeluaran' => 'Stok Barang', 'nominal' => 2000000],
            ['jenis_pengeluaran' => 'Sewa Toko', 'nominal' => 1000000],
            ['jenis_pengeluaran' => 'Gaji Karyawan', 'nominal' => 3000000],
            ['jenis_pengeluaran' => 'Listrik dan Air', 'nominal' => 500000],
            ['jenis_pengeluaran' => 'Biaya Promosi', 'nominal' => 500000],
            ['jenis_pengeluaran' => 'Lain-Lain', 'nominal' => 200000],
        ]);
    }
}

