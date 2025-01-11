<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('kategori')->insert([
            ['kategori' => 'Fashion', 'created_at' => now(), 'updated_at' => now()],
            ['kategori' => 'Alat Tulis', 'created_at' => now(), 'updated_at' => now()],
            ['kategori' => 'Kebutuhan Rumah Tangga', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
