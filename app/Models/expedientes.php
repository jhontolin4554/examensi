<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expedientes extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',

    ];

    public function folder()
    {
        return $this->belongsTo(folders::class);
    }

}
