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
        Schema::create('request_appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Cambiado a unsignedBigInteger para mayor compatibilidad
            $table->unsignedBigInteger('pet_id');  // Lo mismo aquí
            $table->date('request_date');
            $table->string('status');
            $table->string('details');
            $table->timestamps();
        
            // Definición de claves foráneas
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('pet_id')->references('id')->on('pets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_appointments');
    }
};
