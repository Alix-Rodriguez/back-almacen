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
        Schema::create('recepcion_series', function (Blueprint $table) {
            $table->id();
            $table->integer('id_almacen');
            $table->date('fecha');
            $table->integer('id_consecutivo');
            $table->string('sku');
            $table->integer('id_zona');
            $table->integer('id_rack');
            $table->integer('id_nivel');
            $table->integer('id_localidad');
            $table->string('consecutivo');
            $table->string('num_serie');
            $table->string('num_lote');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepcion_series');
    }
};
