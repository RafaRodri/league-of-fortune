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
        $time = Team::find($id);

        return view('team.show', [
            'team' => $time
        ]);
    }

    public function all()
    {
        return 'todos';
    }
}
