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
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('topics_id');

            $table->foreign('users_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
            $table->foreign('topics_id')
                  ->references('id')->on('topics')
                  ->onDelete('cascade');

            $table->string('Content');
            $table->date('CreationDate');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
