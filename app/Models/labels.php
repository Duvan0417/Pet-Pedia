<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class labels extends Model
{
    protected $fillable = [
        'description',
        'name_label',
    ];

    public function topics()
    {
        return $this->belongsToMany(topics::class);
    }
}
