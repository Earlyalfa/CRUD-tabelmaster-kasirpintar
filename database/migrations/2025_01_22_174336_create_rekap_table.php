<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Rekap;

class CreateRekapTable extends Migration
{
    public function up()
    {
        Schema::create('rekap', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->integer('total_barang_masuk');
            $table->integer('total_terjual');
            $table->integer('total_rusak_hilang');
            $table->integer('stok_akhir');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rekap');
    }
}

