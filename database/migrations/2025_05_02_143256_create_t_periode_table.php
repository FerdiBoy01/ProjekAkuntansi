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
        Schema::create('t_periode', function (Blueprint $table) {
            $table->string('Periode', 6);
            $table->date('TanggalMulai');
            $table->date('TanggalSelesai');
            $table->string('Keterangan', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_periode');
    }
};
