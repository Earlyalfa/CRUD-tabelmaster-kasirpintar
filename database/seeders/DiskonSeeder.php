<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Diskon; 
use Carbon\Carbon;

class DiskonSeeder extends Seeder
{
    public function run()
    {
        Diskon::create([
            'name' => 'Promo Produk',
            'value' => 10,
            'min_purchase' => 100000,
            'start_date' => Carbon::now()->format('Y-m-d'),
            'end_date' => Carbon::now()->addMonths(1)->format('Y-m-d'),
            'status' => 1,
        ]);

        Diskon::create([
            'name' => 'Diskon Akhir Tahun',
            'value' => 20,
            'min_purchase' => 200000,
            'start_date' => Carbon::now()->format('Y-m-d'),
            'end_date' => Carbon::now()->addMonths(2)->format('Y-m-d'),
            'status' => 1,
        ]);

        Diskon::create([
            'name' => 'Diskon Flash Sale',
            'value' => 50,
            'min_purchase' => 300000,
            'start_date' => Carbon::now()->format('Y-m-d'),
            'end_date' => Carbon::now()->addWeeks(1)->format('Y-m-d'),
            'status' => 1,
        ]);
    }
}

