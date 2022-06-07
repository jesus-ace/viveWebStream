<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;
        public function serie()
    {
        return $this->belongsTo(serie::class);
    }
        public function pelicula()
    {
        return $this->belongsTo(pelicula::class);
    }
}
