<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\DiskonPromosi;

class CreateDiskonPromosiTable extends Migration
{
    /**
     * Jalankan migration untuk membuat tabel diskon_promosi.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diskon_promosi', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->date('tanggal'); // Tanggal diskon/promosi
            $table->string('kode_promo'); // Kode promosi
            $table->string('nama_promo'); // Nama promosi
            $table->string('barang_diskon'); // Barang yang diberikan diskon
            $table->string('jenis_diskon'); // Jenis diskon (contoh: 10%, 50%)
            $table->integer('jumlah_terjual'); // Jumlah barang yang terjual
            $table->decimal('total_diskon', 15, 2); // Total nominal diskon
            $table->decimal('total_penjualan', 15, 2); // Total penjualan setelah diskon
            $table->text('keterangan')->nullable(); // Keterangan tambahan
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Hapus tabel diskon_promosi jika diperlukan.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diskon_promosi');
    }
}
