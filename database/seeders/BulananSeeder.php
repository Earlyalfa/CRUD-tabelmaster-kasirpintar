<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bulanan;

class BulananSeeder extends Seeder
{
    public function run()
    {
        Bulanan::create([
            'bulan' => 'Januari 2025',
            'pendapatan' => 150000000,
            'pengeluaran' => 80000000,
            'laba_kotor' => 70000000,
            'profit_bersih' => 60000000
        ]);

        Bulanan::create([
            'bulan' => 'Februari 2025',
            'pendapatan' => 140000000,
            'pengeluaran' => 75000000,
            'laba_kotor' => 65000000,
            'profit_bersih' => 57000000
        ]);
    }
}

