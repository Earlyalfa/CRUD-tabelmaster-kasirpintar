<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Transaksi;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaksis')->insert([
            [
                'tanggal_transaksi' => Carbon::now(),
                'nama_produk' => 'Kaos',
                'kategori' => 'Fashion',
                'jumlah' => 2,
                'harga_satuan' => 90000,
                'sub_total' => 180000,
                'total_transaksi' => 180000,
                'diskon' => 0,
                'metode_pembayaran' => 'Tunai',
                'status_pembayaran' => 'Lunas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'tanggal_transaksi' => Carbon::now(),
                'nama_produk' => 'Sandal gunung',
                'kategori' => 'Fashion',
                'jumlah' => 1,
                'harga_satuan' => 45000,
                'sub_total' => 45000,
                'total_transaksi' => 45000,
                'diskon' => 0,
                'metode_pembayaran' => 'Tunai',
                'status_pembayaran' => 'Lunas',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
