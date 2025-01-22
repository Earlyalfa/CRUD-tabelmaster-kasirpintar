<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pendapatan;

class PendapatanSeeder extends Seeder
{
    public function run()
    {
        Pendapatan::create([
            'tanggal' => '2025-01-20',
            'no_transaksi' => 'TRX-001',
            'pendapatan' => 1000000,
            'metode_pembayaran' => 'Ovo',
        ]);

        Pendapatan::create([
            'tanggal' => '2025-01-20',
            'no_transaksi' => 'TRX-002',
            'pendapatan' => 500000,
            'metode_pembayaran' => 'Tunai',
        ]);
    }
}

