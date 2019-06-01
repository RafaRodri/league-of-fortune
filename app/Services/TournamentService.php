<?php

namespace App\Services;

use App\Game;
use App\TeamsGames;
use App\Tournament;

class TournamentService{
    public static function generateTable($id_tournament){
        $tournament = Tournament::find($id_tournament);

        $number_participants = $tournament ->qtd_participantes;
        $teams = $tournament ->teams;


        $number_rounds = ($number_participants-1)*2;
        $games_per_round = $number_participants/2;
        $mark = 1;


        for ($i = 1; $i <= $number_rounds; $i++){
            $m = [];
            $team = 0;

            for($j = 1; $j <= $games_per_round; $j++){
                $m[$j][0] = $teams[$team]->id;

                if($team == 0){
                    $team = $mark;
                }elseif($team == $number_participants-1){
                    $team = 1;
                }else{
                    $team++;
                }
            }

            for($k = $games_per_round; $k >= 1; $k--){
                $m[$k][1] = $teams[$team]->id;

                //último time inserido
                if($k == 1){
                    $mark = $team;
                }

                if($team == $number_participants-1){
                    $team = 1;
                }else{
                    $team++;
                }
            }

            if($i % 2 != 0){
                foreach($m as $matriz){
                    $game = Game::create(["id_torneio" => $id_tournament, "rodada" => $i, "vencedor" => null, "data" => null]);

                    TeamsGames::create(['id_team' => $matriz[0], 'id_game' => $game->id, 'pontos' => null]);
                    TeamsGames::create(['id_team' => $matriz[1], 'id_game' => $game->id, 'pontos' => null]);
                }
            }else{
                foreach($m as $matriz){
                    $game = Game::create(["id_torneio" => $id_tournament, "rodada" => $i, "vencedor" => null, "data" => null]);

                    TeamsGames::create(['id_team' => $matriz[1], 'id_game' => $game->id, 'pontos' => null]);
                    TeamsGames::create(['id_team' => $matriz[0], 'id_game' => $game->id, 'pontos' => null]);
                }
            }
        }
    }
}
