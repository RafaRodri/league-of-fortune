<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamsGames extends Model
{
    public $timestamps  = true;
    protected $table    = 'teams_games';
    protected $fillable = ['id_team','id_game','pontos'];
    protected $hidden   = [];
}


