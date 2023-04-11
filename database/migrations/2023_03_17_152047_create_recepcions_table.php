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
        Schema::create('recepcions', function (Blueprint $table) {
            $table->id();
            $table->integer('id_almacen');
            $table->date('fecha');
            $table->integer('id_consecutivo');
            $table->string('referencia');
            $table->integer('id_proveedor');
            $table->integer('status');
            $table->date('fecha_elaboracion');
            $table->string('usuario_elaboracion');
            $table->date('fecha_confirmada');
            $table->string('usuario_confirmada');
            $table->date('fecha_transito');
            $table->string('usuario_transito');
            $table->date('fecha_recibido');
            $table->string('usuario_recibido');
            $table->date('fecha_cerrado');
            $table->string('usuario_cerrado');
            $table->string('indicaciones');
            $table->string('observaciones');
            $table->integer('tipo');
            $table->date('fecha_chaining');
            $table->integer('id_chaining');
            $table->string('filler1');
            $table->string('filler2');
            $table->string('observaciones_almacen');
            $table->string('descripcion_transportista');
            $table->string('placa_transportista');
            $table->string('licencia_transportista');
            $table->string('conductor');
            $table->string('referencia_telmex');
            $table->string('es_compra_web');
            $table->string('id_centro_costo');
            $table->integer('id_tipo_or');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepcions');
    }
};
