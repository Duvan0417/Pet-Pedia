<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class paymentmethods extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}
