<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::prefix('page')->group(function() {
    Route::get('/', 'PageController@index');

    // Route::get('/serie', function(){
    //     return view('page::section-series.serie-index');
    // });

    Route::get('serie/{name_serie}', 'SerieController@index');
    Route::get('/{name_serie}/{id}', 'SerieController@chapterPlay');
    Route::get('directo', function () {
        return view('page::liveSignal.live');
    });
   

//});
