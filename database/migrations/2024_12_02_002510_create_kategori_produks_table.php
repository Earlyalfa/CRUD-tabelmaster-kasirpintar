<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\KategoriProduk;

class CreateKategoriProduksTable extends Migration
{
    public function up()
    {
        Schema::create('kategori_produks', function (Blueprint $table) {
            $table->string('id_kategori')->primary(); // Membuat id_kategori sebagai primary key
            $table->string('nama_kategori'); // Kolom nama_kategori
            $table->timestamps(); // Kolom untuk created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('kategori_produks');
    }
}
