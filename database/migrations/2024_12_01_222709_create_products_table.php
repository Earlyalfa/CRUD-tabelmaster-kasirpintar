<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel produk.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();  
            $table->string('kode_produk')->unique();  
            $table->string('nama_produk');  
            $table->integer('harga');  
            $table->string('image')->nullable(); 
            $table->timestamps();  
        });
    }

    /**
     * 
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');  
    }
}

