<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Pendapatan;

class CreatePendapatanTable extends Migration
{
    public function up()
    {
        Schema::create('pendapatan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('no_transaksi');
            $table->decimal('pendapatan', 15, 2); 
            $table->string('metode_pembayaran');
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('pendapatan');
    }
}
