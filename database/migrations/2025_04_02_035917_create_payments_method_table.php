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
        Schema::create('payments_method', function (Blueprint $table) {
            $table->id();
            $table->integer('usuario_ID');
            $table->string('tipo');
            $table->string('Detalles');
            $table->date('Fecha_expedicion');
            $table->integer('CCV');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments_method');
    }
};
