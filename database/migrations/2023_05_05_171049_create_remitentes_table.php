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
        Schema::create('remitentes', function (Blueprint $table) {
            $table->id();
            $table->string('empresa');
            $table->string('almacen');
            $table->string('calle');
            $table->string('numero_interno');
            $table->string('numero_externo');
            $table->string('colonia');
            $table->string('delegacion');
            $table->string('codigo_postal');
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
        Schema::dropIfExists('remitentes');
    }
};
