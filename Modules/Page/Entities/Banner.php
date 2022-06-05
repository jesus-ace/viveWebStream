<?php

namespace Modules\Page\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'sinopsis',
        'trailer'
    ];    
    
    protected static function newFactory()
    {
        return \Modules\Page\Database\factories\BannerFactory::new();
    }
}
