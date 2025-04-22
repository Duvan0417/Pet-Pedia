<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainersController extends Controller
{
    public function index()
    {
        return view('trainers.index'); // Asegúrate de tener esta vista creada
    }
}
