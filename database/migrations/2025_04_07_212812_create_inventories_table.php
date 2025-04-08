<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        // Verificar que la tabla products existe primero
        if (Schema::hasTable('products')) {
            Schema::create('inventories', function (Blueprint $table) {
                $table->id();
                
                // Crear el campo sin clave foránea primero
                $table->unsignedBigInteger('product_id')->unique();
                
                $table->integer('available_quantity')->default(0);
                $table->timestamps();
            });

            // Añadir la clave foránea con SQL directo
            DB::statement('
                ALTER TABLE inventories 
                ADD CONSTRAINT inventories_product_id_foreign 
                FOREIGN KEY (product_id) REFERENCES products(id)
                ON DELETE CASCADE
            ');
        }
    }

    public function down()
    {
        Schema::dropIfExists('inventories');
    }
};