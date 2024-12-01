<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KategoriProduk;

class KategoriProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $this->call([
            SuplierSeeder::class,
            KategoriProdukSeeder::class,
            ProdukSeeder::class,
            PegawaiSeeder::class,
        ]);
        //
    }
}
