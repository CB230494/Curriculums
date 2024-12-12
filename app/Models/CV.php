<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    use HasFactory;
    protected $table = 'cvs'; // Nombre exacto de la tabla en la base de datos
    // Columnas permitidas para asignación masiva
    protected $fillable = [
        'user_id',
        'title',
        'personal_info',
        'education',
        'work_experience',
        'skills',
        'languages',
    ];  //
     // Relación con el modelo User
     public function user()
     {
        return $this->belongsTo(User::class);
     }
}
