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
        Schema::create('shelters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pets_id'); 
            $table->unsignedBigInteger('trainers_id'); 
            $table->unsignedBigInteger('services_id'); 

            $table->foreign('pets_id')->references('id')->on('pets')->onDelete('cascade');
            $table->foreign('trainers_id')->references('id')->on('trainers')->onDelete('cascade');
            $table->foreign('services_id')->references('id')->on('services')->onDelete('cascade');

            $table->string('nombre');
            $table->integer('telefono');
            $table->string('responsable');
            $table->string('correo_electronico');
            $table->string('direccion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shelters');
    }
};
