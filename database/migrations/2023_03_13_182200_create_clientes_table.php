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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('clave_cliente');
            $table->string('nombre');
            $table->string('nif');
            $table->string('calle');
            $table->string('colonia');
            $table->string('direccion');
            $table->string('pais');
            $table->string('ciudad');
            $table->string('telefono');
            $table->string('telefono_opcional');
            $table->integer('contribuyente');
            $table->integer('codigoPostal');
            $table->string('email');
            $table->string('contacto');
            $table->string('delegacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
