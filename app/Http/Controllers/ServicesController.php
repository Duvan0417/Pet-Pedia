<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services.index'); // Asegúrate de tener esta vista creada
    }
    
}