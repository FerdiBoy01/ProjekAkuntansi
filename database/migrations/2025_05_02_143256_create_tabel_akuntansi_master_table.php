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
        Schema::create('tabel_akuntansi_master', function (Blueprint $table) {
            $table->integer('id_perkiraan', true);
            $table->string('nomor_perkiraan', 6);
            $table->string('nama_perkiraan', 30);
            $table->string('tipe', 7);
            $table->string('induk', 5);
            $table->integer('level')->nullable();
            $table->string('kelompok', 10);
            $table->string('normal', 10);
            $table->bigInteger('awal_debet')->nullable();
            $table->bigInteger('awal_kredit')->nullable();
            $table->bigInteger('mut_debet');
            $table->bigInteger('mut_kredit');
            $table->bigInteger('sisa_debet');
            $table->bigInteger('sisa_kredit');
            $table->bigInteger('rl_debet');
            $table->bigInteger('rl_kredit');
            $table->bigInteger('nrc_debet');
            $table->bigInteger('nrc_kredit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_akuntansi_master');
    }
};
