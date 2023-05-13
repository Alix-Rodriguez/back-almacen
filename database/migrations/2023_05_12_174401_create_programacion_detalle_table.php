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
        Schema::create('programacion_detalle', function (Blueprint $table) {
            $table->id();
            $table->integer('id_programacion_progreso');
            $table->integer('id_producto');
            $table->string('SKU');
            $table->string('unidad_medida');
            $table->string('cantidad');
            $table->string('descripcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programacion_detalle');
    }
};
