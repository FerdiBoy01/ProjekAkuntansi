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
        Schema::create('tabel_setup_gl_periode', function (Blueprint $table) {
            $table->integer('id_periode', true);
            $table->string('periode_awal', 50);
            $table->string('periode_akhir', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_setup_gl_periode');
    }
};
