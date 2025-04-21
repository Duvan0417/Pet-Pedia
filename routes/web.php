<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VeterinarianController;

Route::get('/veterinarians/create', [VeterinarianController::class, 'create'])->name('veterinarians.create');
Route::post('/veterinarians', [VeterinarianController::class, 'store'])->name('veterinarians.store');
Route::get('/veterinarians', [VeterinarianController::class, 'index'])->name('veterinarians.index');
