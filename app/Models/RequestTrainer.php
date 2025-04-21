<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestTrainer extends Model
{
    
    //
    protected $fillable = [
        'nombre', 'email', 'especialidad', 'mensaje', 'estado'
    ];

}
