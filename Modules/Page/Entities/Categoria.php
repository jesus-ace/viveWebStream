<?php

namespace Modules\Page\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];


    public function serie()
    {
        return $this->hasMany(Serie::class);
    }
    
    protected static function newFactory()
    {
        return \Modules\Page\Database\factories\CategoriaFactory::new();
    }
}
