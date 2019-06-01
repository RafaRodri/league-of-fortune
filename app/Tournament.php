<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    public $timestamps = true;
    protected $table = 'tournaments';
    protected $fillable = [
        'id_tipo',
        'id_patrocinio',
        'nome',
        'qtd_participantes',
        'temporada',
    ];

    public function teams(){
        return $this->belongsToMany(Team::class, 'teams_tournaments', 'id_tournament', 'id_team');
    }

    public function type(){
        return $this->belongsTo(Type::class, 'id_tipo');
    }

    public function sponsor(){
        return $this->belongsTo(Sponsor::class, 'id_patrocinio');
    }

    public function game(){
        return $this->hasMany(Game::class, 'id_torneio');
    }
}
