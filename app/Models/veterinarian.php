<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class veterinarian extends Model
{
    public function requestappomient() {
        return $this->hasMany(RequestAppointment::class);
    }
    public function adoptionrequest() {
        return $this->hasMany(AdoptionRequest::class);
    }
}
