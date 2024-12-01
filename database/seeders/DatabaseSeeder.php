<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Panggil seeder yang telah dibuat
        $this->call([
            SuplierSeeder::class,
            KategoriProdukSeeder::class,
            ProductSeeder::class,
            PegawaiSeeder::class,
        ]);
    }
}
