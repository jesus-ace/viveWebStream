<?php

namespace Modules\Page\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Page\Entities\Banner;
use Modules\Page\Entities\Categorias;
use Modules\Page\Entities\Serie;
use Modules\Page\Entities\Capitulos;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $banners = Banner::get();
        $latest_episodes = Capitulos::orderBy('created_at', 'desc')->get();
        $recommendations = Serie::with('categorias')->get();
        $childish = Serie::where('categoria_id', 3)->with('categorias')->get();
        $relatives_productions = Serie::where('categoria_id', 2)->with('categorias')->get();
        $vertical_productions = Serie::where('categoria_id', 4)->with('categorias')->get();
        return view('page::index', compact('banners', 'latest_episodes', 'recommendations', 'childish', 'relatives_productions', 'vertical_productions'));
        // return view('page::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('page::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('page::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('page::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
