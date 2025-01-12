<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Pegawai;

class PegawaiSeeder extends Seeder
{
    /**
     * Menjalankan seeder untuk menambahkan data pegawai.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawais')->insert([
            [
                'nama_pegawai' => 'Early',
                'sift_awal' => '08:00:00',
                'sift_akhir' => '16:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pegawai' => 'Ella',
                'sift_awal' => '09:00:00',
                'sift_akhir' => '17:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pegawai' => 'Lipiya',
                'sift_awal' => '07:00:00',
                'sift_akhir' => '15:00:00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

