<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class topics extends Model
{
    public function labels(){
        return $this->belongsToMany(labels::class);
    }
}
