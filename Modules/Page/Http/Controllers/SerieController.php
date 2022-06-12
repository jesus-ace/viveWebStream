<?php

namespace Modules\Page\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Page\Entities\Categorias;
use Modules\Page\Entities\Serie;
use Modules\Page\Entities\Capitulos;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index($name_serie)
    {   
        $series = Serie::where('name', $name_serie)->with('categorias')->with('capitulo')->get();
        
        foreach ($series as $serie) {
            $id_serie = $serie->id;
        }
        $temporada_cap = Capitulos::select('temporada_id')->where('serie_id', $id_serie)->get();
        
        $array_temporadas =[];
        foreach ($temporada_cap as $temporada_caps) {
            array_push($array_temporadas, $temporada_caps); 
        }
        $sessons = array_unique($array_temporadas);
        return view('page::section-series.serie-index', compact('series', 'sessons'));
    }

    
}
