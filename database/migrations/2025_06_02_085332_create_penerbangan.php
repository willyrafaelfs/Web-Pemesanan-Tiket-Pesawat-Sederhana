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
        Schema::create('penerbangan', function (Blueprint $table) {
            $table->id('id_penerbangan');
            $table->string('gambar')->nullable();
            $table->string('nama_maskapai');
            $table->integer('nomor_maskapai');
            $table->string('asal');
            $table->string('tujuan');
            $table->dateTime('waktu_keberangkatan');
            $table->dateTime('waktu_kedatangan');
            $table->integer('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_penerbangan');
    }
};
