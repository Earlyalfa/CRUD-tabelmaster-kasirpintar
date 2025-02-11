<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Suplier;

class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Suplier::create([
            'nama' => 'PT. Sukses Selalu',
            'alamat' => 'Jl.Raya No.10',
            'email' => 'info@bajutoko.com',
            'no_hp' => '081224445677',
        ]);

        Suplier::create([
            'nama' => 'Toko Fashion Jaya',
            'alamat' => 'Jl. Kebon Sirih No. 12, Jakarta',
            'email' => 'toko.fashion@email.com',
            'no_hp' => '081234567890',
        ]);
    }
}
