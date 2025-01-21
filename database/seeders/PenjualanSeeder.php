<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penjualan;

class PenjualanSeeder extends Seeder
{
    public function run()
    {
        Penjualan::create([
            'tanggal_waktu' => '2025-01-20 12:30:00',
            'no_transaksi' => 'TRX-001',
            'nama_kasir' => 'Andre',
            'barang_terjual' => json_encode([
                'Kemeja Pria (M, Biru)',
                'Celana Jeans (L, Hitam)'
            ]),
            'metode_pembayaran' => 'Ovo',
            'diskon' => 50,
            'total_harga' => 500000,
            'jumlah' => 2
        ]);

        Penjualan::create([
            'tanggal_waktu' => '2025-01-20 13:45:00',
            'no_transaksi' => 'TRX-002',
            'nama_kasir' => 'Aya',
            'barang_terjual' => json_encode([
                'Dress Wanita (S, Merah)',
                'Blazer Wanita (M, Coklat)'
            ]),
            'metode_pembayaran' => 'Tunai',
            'diskon' => 10,
            'total_harga' => 450000,
            'jumlah' => 2
        ]);
    }
}
