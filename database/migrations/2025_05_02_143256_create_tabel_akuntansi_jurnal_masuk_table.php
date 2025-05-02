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
        Schema::create('tabel_akuntansi_jurnal_masuk', function (Blueprint $table) {
            $table->integer('nomor_jurnal')->primary();
            $table->string('kode_jurnal', 15);
            $table->string('tanggal_selesai', 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_akuntansi_jurnal_masuk');
    }
};
