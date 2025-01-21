<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Penjualan;

class CreatePenjualanTable extends Migration
{
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id();
            $table->timestamp('tanggal_waktu');
            $table->string('no_transaksi');
            $table->string('nama_kasir');
            $table->text('barang_terjual'); // JSON untuk menyimpan detail barang
            $table->string('metode_pembayaran');
            $table->decimal('diskon', 10, 2);
            $table->decimal('total_harga', 10, 2);
            $table->integer('jumlah'); // Menyimpan jumlah total item yang terjual
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penjualan');
    }
}
