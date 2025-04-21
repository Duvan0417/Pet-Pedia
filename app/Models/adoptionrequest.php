<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class adoptionrequest extends Model
{
    public function users (){
        return $this ->belongsTo(User::class);
    }
    public function vetrinarian(){
        return $this->belongsTo(Veterinarian::class);
    }
}
