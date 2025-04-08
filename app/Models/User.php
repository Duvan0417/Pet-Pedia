<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    public function requestAdoption()
    {
        return $this->hasOne(RequestAdoption::class, 'user_ID');
    }
    
    public function requestAppointment()
    {
        return $this->hasOne(RequestAppointment::class, 'user_ID');
    }
    
    public function shoppingCart()
    {
        return $this->hasOne(ShoppingCart::class, 'user_ID');
    }
    
    public function order()
    {
        return $this->hasOne(order::class, 'UserID');
    }
    
    public function forum()
    {
        return $this->hasOne(Forum::class, 'UserID');
    }
    
    public function paymentmethod ()
    {
        return $this->hasOne(paymentmethod::class, 'UserID');
    }
    
}
