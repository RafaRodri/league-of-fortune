<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\TournamentService;
use App\Tournament;

class GameController extends Controller
{
    public function sort($id)
    {
        $tournament = Tournament::find($id);

        if (!is_null($tournament))
            $games = $tournament->game;
        else
            return redirect()->route('dash.tournaments.index');

        if ($games->all() == [])
            TournamentService::generateTable($id);

        return redirect()->route('dash.games.show', ['id' => $tournament->id]);
    }

    public function show($id)
    {
        $tournament = Tournament::find($id);
        if (!is_null($tournament)) {
            $rodadas = ($tournament->qtd_participantes - 1) * 2;
            $games = $tournament->game;
        }else{
            $rodadas = [];
            $games = [];
        }

        return view('dashboard.game.table', [
            'tournament' => $tournament,
            'rodadas' => $rodadas,
            'games' => $games,
        ]);
    }
}
