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

Route::get('/', function () {
    return view('portada');
});

Route::get('/historia', function () {
    return view('historia');
});

Route::get('/jugadores', 'JugadorController@getAllJugadores');
//Route::get('/jugadores', 'JugadorController@getJugadoresLakers');
//Route::get('/jugadores', 'JugadorController@setJugador');

//Route::get('/jugadores', 'JugadorController@modJugador');
//Route::get('/jugadores', 'JugadorController@delJugador');

Route::get('/jugador/{id_jugador}', function ($idJugador) {
    return view('jugador')->with(['idJugador' => $idJugador]);
});
