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
        Schema::create('almacens', function (Blueprint $table) {
            $table->id();
            $table->integer('descuento_almacen');
            $table->integer('tipo');
            $table->integer('picking')->nullable();
            $table->integer('etiqueta_entrada');
            $table->integer('usa_zona')->nullable();
            $table->integer('usa_rack')->nullable();
            $table->integer('usa_nivel')->nullable();
            $table->integer('usa_localidad')->nullable();
            $table->integer('schedule');
            $table->integer('status');
            $table->string('contacto');
            $table->string('calle');
            $table->string('numero_exterior');
            $table->string('numero_interno');
            $table->strig('colonia');
            $table->string('cp');
            $table->string('delegacion_municipio');
            $table->string('telefono');
            $table->string('email');
            $table->integer('usar_ubicacion');
            $table->integer('folio_ubicacion');
            $table->integer('zona_qa')->nullable();
            $table->integer('rack_qa')->nullable();
            $table->integer('nivel_qa')->nullable();
            $table->integer('localidad_qa')->nullable();
            $table->string('nombre');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('almacens');
    }
};
