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
        Schema::create('etiqueta_o_u_t_s', function (Blueprint $table) {
            $table->id();
            $table->integer('id_almacen');
            $table->integer('sku');
            $table->string('nom_etiqueta');
            $table->string('archivo_img');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etiqueta_o_u_t_s');
    }
};