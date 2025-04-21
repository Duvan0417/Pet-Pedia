<?php
              
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'users_id',
        'topics_id',
        'Content',
        'CreationDate',
    ];

    protected $casts = [
        'CreationDate' => 'date',
    ];

    // Relación: una respuesta pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    // Relación: una respuesta pertenece a un topic
    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topics_id');
    }
}
