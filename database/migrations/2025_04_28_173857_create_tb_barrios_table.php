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
        Schema::create('tb_barrios', function (Blueprint $table) {
            $table->increments('barr_codi', 10);
            $table->string('barr_nomb', 30);
            $table->tinyInteger('barr_estr', false, 3);
            $table->integer('comu_codi', false, 10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_barrios');
    }
};
