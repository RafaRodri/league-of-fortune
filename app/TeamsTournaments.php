<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamsTournaments extends Model
{
    public $timestamps  = true;
    protected $table    = 'teams_tournaments';
    protected $fillable = ['id_team','id_tournament'];
    protected $hidden   = [];
}
