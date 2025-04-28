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
        Schema::create('tb_paises', function (Blueprint $table) {
            $table->char('pais_codi', 3)->primary();
            $table->string('pais_nomb', 52);
            $table->integer('pais_capi', false, 10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_paises');
    }
};
