<?php

namespace App\Http\Controllers;

use App\Models\Shelter;
use Illuminate\Http\Request;

class SheltersController extends Controller
{
    public function index()
    {
        return view('shelters.index'); // Asegúrate de tener esta vista creada
    }
}

