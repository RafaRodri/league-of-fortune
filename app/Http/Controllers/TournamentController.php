<?php

namespace App\Http\Controllers;

use App\Round;
use App\Tournament;

class TournamentController extends Controller
{
    public function index()
    {
        $tournaments = Tournament::all()->first();
        #$tournaments = $tournaments->all()[0];
        #$tournaments = $tournaments->game()->all();

        #dd($tournaments);

        return view('tournament.index',[
            'tournament' => $tournaments,
        ]);
    }

    public function league($id_tournament = 1, $id_round = 1)
    {
        $tournament = Tournament::find($id_tournament);
        $teams = $tournament->teams;

        $rodada = Round::find($id_round);

        /**
         * Lógica para retornar jogos da rodada
         *
         *
         * Service que recebe parametro "rodada"
         *
         *
         * saber qual o id da rodada com o parâmetro informado:
         * SELECT id FROM `rounds` WHERE rodada = 1
         * [1]
         *
         * saber qual o id do jogo com o "id_rodada" igual a busca anterior:
         * SELECT id FROM `games` WHERE id_rodada = 1
         * [1]
         *
         * retornar registros quando "id_game" for igual a busca anterior:
         * SELECT * FROM `teams_games` WHERE id_game = 1
         *
         *
         *                      ===========================================
         *                      ===========================================
         *                      TeamsGames
         *                      id       id_team     #id_game   pontos
         *                  ->  1        1           1          92.05
         *                      2        2           1          88.05
         *                      3        1           2          77.05
         *                      4        2           2          102.05
         *                      5        3           3          91.05   *
         *                      6        4           3          82.05   *
         *                      7        5           4          91.05   *
         *                      8        6           4          82.05   *
         *
         *                      Games
         *                      id       id_torneio  #id_rodada vencedor
         *                  ->  1        1           1          1
         *                      2        1           2          2
         *                  ->  3        1           1          3      *
         *                  ->  4        1           1          6      *
         *
         *                      id       rodada      data
         *                  ->  1        1           2019-05-25
         *                      2        2           2019-06-01
         *                      3        3           2019-06-08
         *                      ===========================================
         *                      ===========================================
         *
         * time1 XX x XX time2
         *
         **/


        #dd($teams[0]->ranking->first());


        return view('tournament.league', [
            'teams' => $teams,
            'games' => $rodada->game,
        ]);
    }
}
