<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Lastok;

class CreateLastokTable extends Migration
{
    public function up()
    {
        Schema::create('lastok', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang')->unique();
            $table->string('nama_barang');
            $table->string('kategori');
            $table->integer('stok_awal');
            $table->integer('barang_masuk');
            $table->integer('barang_terjual');
            $table->integer('barang_rusak')->default(0);
            $table->integer('stok_akhir');
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lastok');
    }
}
