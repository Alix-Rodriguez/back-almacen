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
        Schema::create('almacen_remitentes', function (Blueprint $table) {
            $table->id();
            $table->string('contacto');
            $table->string('calle');
            $table->string('numero_extension');
            $table->string('numero_interno');
            $table->string('colonia');
            $table->string('cp');
            $table->string('delegacion_municipio');
            $table->string('telefono');
            $table->string('email');
            $table->string('rfc');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('almacen_remitentes');
    }
};
