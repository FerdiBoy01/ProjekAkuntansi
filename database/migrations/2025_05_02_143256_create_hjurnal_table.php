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
        Schema::create('hjurnal', function (Blueprint $table) {
            $table->integer('NomorJurnal')->primary();
            $table->string('JurnalKode', 15);
            $table->string('TanggalSelesai', 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hjurnal');
    }
};
