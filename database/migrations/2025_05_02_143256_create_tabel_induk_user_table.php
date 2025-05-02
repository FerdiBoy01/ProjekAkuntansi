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
        Schema::create('tabel_induk_user', function (Blueprint $table) {
            $table->integer('id_user', true);
            $table->string('username', 100)->unique('username');
            $table->string('password', 100)->default('');
            $table->string('nama_lengkap');
            $table->enum('asal_kantor', ['BKCU', 'CU']);
            $table->string('kode_cu', 6)->nullable();
            $table->string('email');
            $table->enum('leveluser', ['Admin', 'Supervisor', 'User'])->default('User');
            $table->enum('divisi', ['kasir', 'credit', 'operasional', 'akuntansi']);
            $table->enum('publish', ['Yes', 'No'])->default('No');
            $table->date('tgldaftar')->nullable();
            $table->date('tgllogin');
            $table->enum('statuslogin', ['Online', 'Offline'])->default('Offline');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_induk_user');
    }
};
