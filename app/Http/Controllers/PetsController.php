<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;



class PetsController extends Controller
{
  
    public function create()
    {
        return view('frm_pets');
    }

    public function store(Request $request)
    {
        $pet = new Pet();
        $pet->nombre = $request->nombre;
        $pet->edad = $request->edad;
        $pet->especie = $request->especie;
        $pet->raza = $request->raza;
        $pet->tamano = $request->tamano;
        $pet->sexo = $request->sexo;
        $pet->descripcion = $request->descripcion;

        $pet->save();

        return response()->json([
            'message' => 'Mascota registrada con éxito',
            'pet' => $pet
        ]);
    }
    
    
}



