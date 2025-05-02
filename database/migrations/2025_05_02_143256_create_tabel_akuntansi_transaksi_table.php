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
        Schema::create('tabel_akuntansi_transaksi', function (Blueprint $table) {
            $table->integer('id_transaksi', true);
            $table->string('kode_jurnal', 15);
            $table->string('nomor_perkiraan', 10)->index('nomor_perkiraan');
            $table->string('tanggal_transaksi', 12);
            $table->string('bulan_transaksi', 20);
            $table->string('jenis_transaksi', 15);
            $table->text('keterangan_transaksi');
            $table->bigInteger('debet');
            $table->bigInteger('kredit');
            $table->string('tanggal_posting', 12);
            $table->string('keterangan_posting', 10);
            $table->string('id_user', 10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_akuntansi_transaksi');
    }
};
