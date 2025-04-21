<?php

use App\Http\Controllers\ForumCategoriesController;
use App\Http\Controllers\ForumController;
use App\Models\forum_categories;

// Listar todos los foros
Route::get('/forums', [ForumCategoriesController::class, 'index']);

// Crear un nuevo foro
Route::post('/forums', [ForumCategoriesController::class, 'store']);

// Mostrar un foro específico
Route::get('/forums/{id}', [ForumCategoriesController::class, 'show']);

// Actualizar un foro existente
//Route::put('/forums/{id}', [ForumCategoriesController::class, 'update']);
//Route::patch('/forums/{id}', [ForumCategoriesController::class, 'update']); // opcional para PATCH

// Eliminar un foro
//Route::delete('/forums/{id}', [ForumCategoriesController::class, 'destroy']);


