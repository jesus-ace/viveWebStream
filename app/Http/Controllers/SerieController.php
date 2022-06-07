<?php

namespace App\Http\Controllers;

use App\Models\serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
      public function __construct()
      {
          $this->middleware('auth');
      }
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $series=serie::all();
        return view('welcome', array('series' => $series));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function edit(serie $serie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, serie $serie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function destroy(serie $serie)
    {
        //
    }
}
