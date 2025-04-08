<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                $table->id(); // BIGINT UNSIGNED AUTO_INCREMENT
                $table->string('name');
                $table->text('description')->nullable();
                $table->decimal('price', 10, 2);
                $table->string('image')->nullable();
                
                // Campo para la relación (mismo tipo que product_categories.id)
                $table->unsignedBigInteger('product_category_id');
                
                $table->timestamps();
                $table->softDeletes();

                // Verificar que la tabla referenciada existe
                if (Schema::hasTable('product_categories')) {
                    $table->foreign('product_category_id')
                          ->references('id')
                          ->on('product_categories')
                          ->onDelete('cascade'); // Elimina productos si se borra la categoría
                }
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
