<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Keuangan;  

class KeuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Keuangan::create([
            'tanggal' => '2025-01-20',
            'pendapatan' => 5000000,
            'pengeluaran' => 2000000,
            'kategori' => 'Stok Baru',
            'profit_bersih' => 7000000,
        ]);

        Keuangan::create([
            'tanggal' => '2025-01-21',
            'pendapatan' => 6500000,
            'pengeluaran' => 1500000,
            'kategori' => 'Operasional',
            'profit_bersih' => 8000000,
        ]);
    }
}
