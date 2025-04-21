<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\pets;
use Illuminate\Http\Request;



class PetsController extends Controller
{
    public function index()
    {
        return view('pets.index'); // Asegúrate de tener esta vista creada
    }
 
    
}


    

