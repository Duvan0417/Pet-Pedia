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
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id'); 
            $table->unsignedBigInteger('forums_id'); 

            $table->foreign('users_id')
                  ->references('id')->on('users') 
                  ->onDelete('cascade');  
            $table->foreign('forums_id')
                        ->references('id')->on('forums') 
                        ->onDelete('cascade'); 
            $table->string('Qualification');
            $table->date('Creation_Date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topics');
    }
};
