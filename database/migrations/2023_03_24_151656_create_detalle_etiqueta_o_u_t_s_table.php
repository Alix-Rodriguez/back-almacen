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
        Schema::create('detalle_etiqueta_o_u_t_s', function (Blueprint $table) {
            $table->id();
            $table->integer('id_ein');
            $table->integer('id_almacen');
            $table->integer('sku');
            $table->string('nom_etiqueta');
            $table->integer('id_cliente');
            $table->integer('id_reg');
            $table->integer('orden');
            $table->integer('tipo_reglon');
            $table->string('prefijo');
            $table->integer('constante');
            $table->string('sufijo');
            $table->string('formula');
            $table->integer('imprimir');
            $table->integer('id_campo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_etiqueta_o_u_t_s');
    }
};
