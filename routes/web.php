<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestTrainersController;


// Ruta para la vista de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Ruta para mascotas
Route::get('/pets', [PetsController::class, 'store'])->name('ee');
Route::post('/pets', [PetsController::class, 'create'])->name('aa');

// Ruta para entrenadores 
Route::get('/trainers', [TrainersController::class, 'Trainers'])->name('trainer.index');


Route::get('/trainers', [RequestTrainersController::class, 'RequestTrainer'])->name('requesttrainer.index');


Route::get('/trainers', [SheltersController::class, 'Shelters'])->name('shelters.index');


Route::get('/trainers', [ServicesController::class, 'Services'])->name('services.index');






