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
        Schema::create('tb_municipios', function (Blueprint $table) {
            $table->increments('muni_codi', 10);
            $table->string('muni_nomb', 30);
            $table->integer('depa_codi', false, 10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_municipios');
    }
};
