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


/**/
Route::get('/champions', ['as' => 'index.champions', 'uses' => 'HomeController@champions']);


/**/
Route::get('/cup', ['as' => 'index.cup', 'uses' => 'HomeController@cup']);


/**/
Route::get('/hall', ['as' => 'index.hall', 'uses' => 'HomeController@hall']);


/**/
Route::get('/prize', ['as' => 'index.prize', 'uses' => 'HomeController@prize']);
