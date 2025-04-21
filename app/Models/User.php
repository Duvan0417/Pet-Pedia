<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    public function forum() {
        return $this->hasMany(Forum::class);
}
public function payment() {
    return $this->hasMany(Payment::class);
}
public function requestappomient() {
    return $this->hasMany(RequestAppointment::class);
}
public function adoptionrequest() {
    return $this->hasMany(AdoptionRequest::class);
}
}