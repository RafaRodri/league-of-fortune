<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    public $timestamps = true;
    protected $table = 'tournaments';
    protected $fillable = [
        'id_tipo',
        'nome',
        'temporada',
    ];

    public function teams(){
        return $this->belongsToMany(Team::class, 'teams_tournaments', 'id_tournament', 'id_team');
    }

    public function type(){
        return $this->belongsTo(Type::class, 'id_tipo');
    }

    public function game(){
        return $this->hasMany(Game::class);
    }
}
