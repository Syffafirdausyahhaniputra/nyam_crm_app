<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('m_barang', function (Blueprint $table) {
            $table->id('barang_id');
            $table->string('kode_barang', 50)->unique();
            $table->string('nama_barang');
            $table->string('deskripsi_barang')->nullable();
            $table->string('kalori')->nullable();
            $table->string('komposisi')->nullable();
            $table->string('kandungan')->nullable();
            $table->string('ukuran')->nullable();
            $table->string('pic', 200)->nullable();
            $table->double('hpp', 10, 2)->nullable();
            $table->integer('stok')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_barang');
    }
};
