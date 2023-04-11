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
        Schema::create('recepcion_detalles', function (Blueprint $table) {
            $table->id();
            $table->integer('id_almacen');
            $table->date('fecha');
            $table->integer('id_consecutivo');
            $table->string('sku');
            $table->integer('cantidad_requerida');
            $table->integer('cantidad_surtida');
            $table->date('fecha_elaboracion');
            $table->string('aduana');
            $table->string('pedimento');
            $table->date('fecha_aduana');
            $table->string('pais_origen');
            $table->integer('id_ucarga');
            $table->integer('cantidad_ucarga');
            $table->string('sku_sustitutivo');
            $table->decimal('precio', 10,2);
            $table->string('lote');
            $table->date('fecha_caducidad');
            $table->string('num_lote');
            $table->integer('id_tasacambio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepcion_detalles');
    }
};
