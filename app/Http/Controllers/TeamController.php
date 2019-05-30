<?php

namespace App\Http\Controllers;

use App\Team;

class TeamController extends Controller
{
    public function __construct()
    {
    }

    public function show($id)
    {
        #$time = Team::where('id',1)->get();
        $time = Team::find($id);

        #$teste= TeamsGames::find(1);
        #dd($teste->all());

        return view('team.show', [
            'team' => $time
        ]);
    }

    public function all()
    {
        return 'todos';
    }
}
