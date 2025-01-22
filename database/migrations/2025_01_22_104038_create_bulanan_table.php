<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Bulanan;

class CreateBulananTable extends Migration
{
    public function up()
    {
        Schema::create('bulanan', function (Blueprint $table) {
            $table->id();
            $table->string('bulan'); // Nama bulan, contoh: Januari 2025
            $table->decimal('pendapatan', 15, 2); // Pendapatan
            $table->decimal('pengeluaran', 15, 2); // Pengeluaran
            $table->decimal('laba_kotor', 15, 2); // Laba Kotor
            $table->decimal('profit_bersih', 15, 2); // Profit Bersih
            $table->timestamps(); // Untuk menyimpan waktu pembuatan dan update
        });
    }

    public function down()
    {
        Schema::dropIfExists('bulanan');
    }
}
