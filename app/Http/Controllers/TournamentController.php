<?php

namespace App\Http\Controllers;

use App\Tournament;

class TournamentController extends Controller
{
    public function index()
    {
        $tournaments = Tournament::all()->first();

        return view('tournament.index',[
            'tournament' => $tournaments,
        ]);
    }

    public function league($id_tournament = 1, $id_round = 1)
    {
        $tournament = Tournament::find($id_tournament);
        $teams = $tournament->teams;

        $games = $tournament->game;

        return view('tournament.league', [
            'teams' => $teams,
            'games' => $games,
            'round' => $id_round,
        ]);
    }
}
