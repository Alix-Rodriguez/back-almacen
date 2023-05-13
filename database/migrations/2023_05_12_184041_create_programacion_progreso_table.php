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
        Schema::create('programacion_progreso', function (Blueprint $table) {
            $table->id();
            $table->integer('id_proveedor');
            $table->integer('id_almacen');
            $table->integer('id_empresa');
            $table->string('fecha');
            $table->string('indicaciones');
            $table->string('observacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programacion_progreso');
    }
};
