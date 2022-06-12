<?php

namespace Modules\Page\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Serie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sinopsis',
        'categoria_id',
        'cover'
    ];
    
    public function categorias()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function capitulo()
    {
        return $this->hasMany(Capitulos::class, 'serie_id');
    }
    protected static function newFactory()
    {
        return \Modules\Page\Database\factories\SerieFactory::new();
    }
}
