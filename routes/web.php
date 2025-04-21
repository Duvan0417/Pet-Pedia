<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome');
});

Route::get('/pets', [PetsController::class, 'Pets'])->name('Pets.index');
Route::get('/trainers', [TrainerController::class, 'index'])->name('trainers.index');
Route::get('/trainers', [TrainerController::class, 'index'])->name('trainers.index');
Route::get('/trainers', [TrainerController::class, 'index'])->name('trainers.index');
Route::get('/trainers', [TrainerController::class, 'index'])->name('trainers.index');
use App\Http\Controllers\PetsController;







