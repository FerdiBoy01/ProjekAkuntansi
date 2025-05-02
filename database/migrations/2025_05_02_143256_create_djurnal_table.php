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
        Schema::create('djurnal', function (Blueprint $table) {
            $table->integer('TransaksiID', true);
            $table->string('JurnalKode', 15);
            $table->string('NomorPerkiraan', 10)->index('nomor_perkiraan');
            $table->string('TanggalTransaksi', 12);
            $table->string('bulan_transaksi', 20);
            $table->string('jenis_transaksi', 15);
            $table->text('Keterangan');
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
        Schema::dropIfExists('djurnal');
    }
};
