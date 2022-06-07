<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelicula extends Model
{
    use HasFactory;
            public function categoria()
    {
        return $this->hasMany(categoria::class);
    }
        public function clasificacion()
    {
        return $this->hasMany(clasificacion::class);
    }
}
