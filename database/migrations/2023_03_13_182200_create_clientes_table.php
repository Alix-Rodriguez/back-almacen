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
            $table->string('nombre_cliente');
            $table->string('nif');
            $table->string('calle');
            $table->string('colonia');
            $table->string('pais');
            $table->string('telefono');
            $table->string('telefono_opcional');
            $table->integer('codigoPostal');
            $table->string('email');
            $table->string('contacto');
            $table->string('delegacion');
            $table->string('id_empresa');
            $table->string('telefono_opcional2');
            $table->string('numero_interior');
            $table->string('numero_exterior');
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
