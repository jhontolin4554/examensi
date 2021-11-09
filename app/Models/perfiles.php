<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perfiles extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'carnet',
        'carrera',
        'dirrecion',
        'telefono',
        'fecha_nacimiento',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
