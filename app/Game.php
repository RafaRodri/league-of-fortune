<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public $timestamps = true;
    protected $table = 'games';
    protected $fillable = [
        'id_torneio',
        'id_rodada',
        'vencedor',
    ];

    public function team(){
        return $this->belongsToMany(Team::class, 'teams_games', 'id_game', 'id_team');
    }

    public function score(){
        return $this->belongsToMany(Team::class, 'teams_games', 'id_game', 'id_team')->select('pontos');
    }

    public function round(){
        return $this->belongsTo(Round::class);
    }

    public function tournament(){
        return $this->belongsTo(Tournament::class, 'id_torneio');
    }
}
