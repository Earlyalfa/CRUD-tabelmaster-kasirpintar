<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DiskonPromosi;

class DiskonPromosiSeeder extends Seeder
{
    /**
     * Jalankan seeder.
     *
     * @return void
     */
    public function run()
    {
        // Data contoh untuk tabel diskon_promosi
        DiskonPromosi::create([
            'tanggal' => '2025-01-20',
            'kode_promo' => 'PROMO10',
            'nama_promo' => 'Diskon Awal Tahun',
            'barang_diskon' => 'Kemeja Pria Formal',
            'jenis_diskon' => '10%',
            'jumlah_terjual' => 20,
            'total_diskon' => 300000,
            'total_penjualan' => 2700000,
            'keterangan' => 'Berlaku untuk semua ukuran',
        ]);

        DiskonPromosi::create([
            'tanggal' => '2025-01-21',
            'kode_promo' => 'CLEARANCE50',
            'nama_promo' => 'Cuci Gudang',
            'barang_diskon' => 'Dress Casual',
            'jenis_diskon' => '50%',
            'jumlah_terjual' => 10,
            'total_diskon' => 500000,
            'total_penjualan' => 500000,
            'keterangan' => 'Stok lama habis',
        ]);
    }
}
