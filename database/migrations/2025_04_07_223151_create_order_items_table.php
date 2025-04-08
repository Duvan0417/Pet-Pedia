<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            
            // Relación con el pedido
            $table->foreignId('order_id')
                  ->constrained('orders')
                  ->onDelete('cascade');
                  
            // Relación con el producto      
            $table->foreignId('product_id')
                  ->constrained('products')
                  ->onDelete('restrict');
            
            // Datos del ítem
            $table->integer('quantity');
            $table->decimal('unit_price', 10, 2); // Precio en el momento de la compra
            
            $table->timestamps();
            
            // Índices para mejor rendimiento
            $table->index('order_id');
            $table->index('product_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_items');
    }
};