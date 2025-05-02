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
        Schema::create('tabel_setup_gl_perkiraan', function (Blueprint $table) {
            $table->integer('id_setup', true);
            $table->string('aktiva_lancar', 11);
            $table->string('hutang_lancar', 11);
            $table->string('modal_sendiri', 11);
            $table->string('kas', 11);
            $table->string('shu', 11);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_setup_gl_perkiraan');
    }
};
