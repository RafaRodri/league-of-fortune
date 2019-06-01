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

/*HomeController*/
Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index']);


/*TeamController*/
Route::get('/team', ['as' => 'team.all', 'uses' => 'TeamController@all']);
Route::get('/team/{id}', ['as' => 'team.show', 'uses' => 'TeamController@show']);


/*TournamentController*/
Route::get('/tournament', ['as' => 'tournament.index', 'uses' => 'TournamentController@index']);
Route::get('/league', ['as' => 'tournament.league', 'uses' => 'TournamentController@league']);


/*TypeController*/
Route::get('/type', ['as' => 'type.index', 'uses' => 'TypeController@index']);


/*Dashboard - TournamentController*/
Route::get('/Dashboard/tournaments', ['as' => 'dash.tournaments.index', 'uses' => 'Dashboard\TournamentController@index']);
Route::get('/Dashboard/tournaments/show/{id}', ['as' => 'dash.tournaments.show', 'uses' => 'Dashboard\TournamentController@show']);
Route::get('/Dashboard/tournaments/create', ['as' => 'dash.tournaments.create', 'uses' => 'Dashboard\TournamentController@create']);
Route::post('/Dashboard/tournaments', ['as' => 'dash.tournaments.store', 'uses' => 'Dashboard\TournamentController@store']);
Route::get('/Dashboard/tournaments/{id}', ['as' => 'dash.tournaments.edit', 'uses' => 'Dashboard\TournamentController@edit']);
Route::put('/Dashboard/tournaments/{id}', ['as' => 'dash.tournaments.update', 'uses' => 'Dashboard\TournamentController@update']);
Route::delete('/Dashboard/tournaments/{id}', ['as' => 'dash.tournaments.delete', 'uses' => 'Dashboard\TournamentController@delete']);

Route::post('/Dashboard/tournament/{id}', ['as' => 'dash.tournament.participants', 'uses' => 'Dashboard\TournamentController@participants']);

/*Dashboard - GameController*/
Route::get('/Dashboard/games/show/{id}', ['as' => 'dash.games.show', 'uses' => 'Dashboard\GameController@show']);
Route::get('/Dashboard/games/sort/{id}', ['as' => 'dash.games.sort', 'uses' => 'Dashboard\GameController@sort']);


/**/
Route::get('/champions', ['as' => 'index.champions', 'uses' => 'HomeController@champions']);


/**/
Route::get('/cup', ['as' => 'index.cup', 'uses' => 'HomeController@cup']);


/**/
Route::get('/hall', ['as' => 'index.hall', 'uses' => 'HomeController@hall']);


/**/
Route::get('/prize', ['as' => 'index.prize', 'uses' => 'HomeController@prize']);
