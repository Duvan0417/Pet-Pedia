<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forum_categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    // Una categoría tiene muchos foros
    public function forums()
    {
        return $this->hasMany(forum_categories::class);
}
}
