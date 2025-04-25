<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});



Route::prefix('productos')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/crear', [ProductController::class, 'create'])->name('products.create');
    Route::post('/', [ProductController::class, 'store'])->name('products.store');
});

// Otras rutas...
Route::view('/inicio', 'home')->name('inicio');
Route::view('/compra', 'products.index')->name('compra');
// ... resto de tus rutas