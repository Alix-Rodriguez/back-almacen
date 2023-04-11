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
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_almacen');
            $table->string('SKU');
            $table->string('fecha');
            $table->integer('id_consecutivo');
            $table->integer('reg_numero');
            $table->integer('tipo');
            $table->integer('cantidad');
            $table->string('aduana');
            $table->string('pedimento');
            $table->date('fecha_aduana');
            $table->string('pais_origen');
            $table->string('lote');
            $table->string('referencia');
            $table->date('fecha_elaboracion');
            $table->string('etiqueta');
            $table->date('fecha_recepcion');
            $table->decimal('precio',8,2);
            $table->string('filler1');
            $table->string('filler2');
            $table->integer('id_consecutivoRx');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimientos');
    }
};
