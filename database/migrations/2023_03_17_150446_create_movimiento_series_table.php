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
        Schema::create('movimiento_series', function (Blueprint $table) {
            $table->id();
            $table->integer('id_almacen');
            $table->string('sku');
            $table->date('fecha');
            $table->integer('id_consecutivo');
            $table->integer('reg_numero');
            $table->integer('id_zona');
            $table->integer('id_rack');
            $table->integer('id_nivel');
            $table->integer('id_localidad');
            $table->integer('consecutivo');
            $table->string('num_serie');
            $table->integer('apartado');
            $table->string('lote');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimiento_series');
    }
};
