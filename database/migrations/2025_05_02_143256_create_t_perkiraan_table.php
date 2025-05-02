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
        Schema::create('t_perkiraan', function (Blueprint $table) {
            $table->string('NomorPerkiraan', 15)->primary();
            $table->string('NamaPerkiraan', 45);
            $table->string('Kelompok', 25);
            $table->string('Keterangan', 35);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_perkiraan');
    }
};
