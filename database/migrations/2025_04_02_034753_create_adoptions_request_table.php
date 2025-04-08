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
        Schema::create('adoptions_request', function (Blueprint $table) {
            $table->id();
            $table->integer('usuario_ID');
            $table->integer('mascota_ID');
            $table->date('Fecha_solicitud');
            $table->string('estado');
            $table->string('comentarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adoptions_request');
    }
};
