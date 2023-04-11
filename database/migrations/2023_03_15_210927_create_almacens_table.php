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
            $table->string('descuento_almacen');
            $table->integer('tipo');
            $table->integer('picking');
            $table->integer('etiqueta_entrada');
            $table->integer('usa_zona');
            $table->integer('usa_rack');
            $table->integer('usa_nivel');
            $table->integer('usa_localidad');
            $table->integer('schedule');
            $table->integer('status');
            $table->string('contacto');
            $table->string('calle');
            $table->string('numero_extension');
            $table->string('numero_interno');
            $table->string('colonia');
            $table->string('cp');
            $table->string('delegacion_municipio');
            $table->string('telefono');
            $table->string('email');
            $table->integer('usar_ubicacion');
            $table->integer('folio_ubicacion');
            $table->integer('zona_qa');
            $table->integer('rack_qa');
            $table->integer('nivel_qa');
            $table->integer('localidad_qa');

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
