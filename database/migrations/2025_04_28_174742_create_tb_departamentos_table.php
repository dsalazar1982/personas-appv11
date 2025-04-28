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
        Schema::create('tb_departamentos', function (Blueprint $table) {
            $table->increments('depa_codi', 10);
            $table->string('depa_nomb', 52);
            $table->char('pais_codi', 3);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_departamentos');
    }
};
