<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{
    public $timestamps = true;
    protected $table = 'rounds';
    protected $fillable = [
        'num',
        'data',
    ];

    public function game(){
        return $this->hasMany(Game::class, 'id_rodada');
    }
}
