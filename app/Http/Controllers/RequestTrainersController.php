<?php

namespace App\Http\Controllers;

use App\Models\request_trainers;
use App\Models\RequestTrainer;
use Illuminate\Http\Request;


    class RequestTrainersController extends Controller
    {
        public function index()
        {
            return view('requesttrainer.index'); // Asegúrate de tener esta vista creada
        }
 
    }
     

