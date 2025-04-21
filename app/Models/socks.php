<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class socks extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'Guy',
        'URL',
        'Upload_Date',
    ];

    // Relación: un sock pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
