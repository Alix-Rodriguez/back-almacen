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
        Schema::create('etiquetados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->binary('archivo_img');
            $table->string('status');
            $table->string('sistema');
            $table->integer('impresion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etiquetados');
    }
};
