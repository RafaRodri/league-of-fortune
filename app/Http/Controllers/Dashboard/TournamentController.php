<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Sponsor;
use App\Team;
use App\TeamsTournaments;
use App\Tournament;
use App\Type;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    /* Tournaments */
    public function index()
    {
        $tournaments = Tournament::all();

        return view('dashboard.tournament.index', [
            'tournaments' => $tournaments,
        ]);
    }

    public function show($id)
    {
        $tournament = Tournament::find($id);
        $free_teams = Team::query()
            ->leftJoin('teams_tournaments', 'teams.id', '=', 'teams_tournaments.id_team')
            ->where('teams_tournaments.id_team', '=', null)
            ->select('teams.id', 'teams.nome_time')
            ->get()
            ->all();

        return view('dashboard.tournament.show', [
            'tournament' => $tournament,
            'free_teams' => $free_teams,
        ]);
    }

    public function create()
    {
        return view('dashboard.tournament.create', [
            'types' => Type::all(),
            'sponsors' => Sponsor::all(),
        ]);
    }

    public function store(Request $request)
    {
        Tournament::create($request->all());
        return redirect()->route('dash.tournaments.index');
    }

    public function edit($id)
    {
        $tournament = Tournament::find($id);

        return view('dashboard.tournament.edit', [
            'types' => Type::all(),
            'sponsors' => Sponsor::all(),
            'tournament' => $tournament,
        ]);
    }

    public function update(Request $request, $id)
    {
        Tournament::find($id)->update($request->all());
        return redirect()->route('dash.tournaments.index');
    }

    public function delete($id)
    {
        $tournament = Tournament::find($id);
        $teams = TeamsTournaments::where('id_tournament', $id)->get();

        foreach($teams as $team){
            $team->delete();
        }
        $tournament->delete();

        return redirect()->route('dash.tournaments.index');
    }


    /* Tournament */
    public function participants(Request $request, $id)
    {
        $participants = $request->participant;

        foreach ($participants as $participant) {
            if (!is_null($participant)) {
                if(TeamsTournaments::where('id_team', $participant)->get()->all() == [])
                    TeamsTournaments::create(['id_team' => $participant, 'id_tournament' => $id]);
            }
        }

        return redirect()->route('dash.tournaments.index');
    }
}
