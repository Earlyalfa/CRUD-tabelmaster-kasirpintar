<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pegawai;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Pegawai::create([
            'nama_pegawai' => 'Early',
            'sift_awal' => '08:00:00',
            'sift_akhir' => '17:00:00',
        ]);

        Pegawai::create([
            'nama_pegawai' => 'Ella',
            'sift_awal' => '09:00:00',
            'sift_akhir' => '18:00:00',
        ]);
        //
    }
}
