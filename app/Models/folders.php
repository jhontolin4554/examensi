<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class folders extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',

    ];

    public function teams()
    {
        return $this->belongsTo(teams::class);
    }
    public function expediente()
    {
        return $this->hasMany(expedientes::class);
    }
    public function imagen()
    {
        return $this->hasMany(imagenes::class);
    }

}
