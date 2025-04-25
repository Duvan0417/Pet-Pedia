<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'Comida',
                'description' => 'Alimentos nutritivos para tus mascotas'
            ],
            [
                'name' => 'Juguetes',
                'description' => 'Diversión y entretenimiento para animales'
            ],
            [
                'name' => 'Accesorios',
                'description' => 'Artículos útiles para el cuidado diario'
            ],
            [
                'name' => 'Ropa',
                'description' => 'Vestimenta y abrigo para mascotas'
            ],
            [
                'name' => 'Camas y Muebles',
                'description' => 'Descanso cómodo para tus animales'
            ]
        ];

        foreach ($categories as $category) {
            ProductCategory::create($category);
        }
    }
}