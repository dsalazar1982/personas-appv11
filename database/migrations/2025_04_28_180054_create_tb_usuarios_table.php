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
        Schema::create('tb_usuarios', function (Blueprint $table) {
            $table->increments('usua_codi', 11);
            $table->string('usua_user', 100);
            $table->string('usua_pass', 100);
            $table->string('perso_cod', 4);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_usuarios');
    }
};
