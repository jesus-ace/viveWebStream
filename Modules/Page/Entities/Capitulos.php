<?php

namespace Modules\Page\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class capitulos extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sub_name',
        'sinopsis',
        'temporada_id',
        'nro_cap',
        'serie_id',
        'cover',
        'video'
    ];

    public function serie()
    {
        return $this->hasMany(Serie::class, 'categoria_id');
    }
    
    protected static function newFactory()
    {
        return \Modules\Page\Database\factories\CapitulosFactory::new();
    }
}
