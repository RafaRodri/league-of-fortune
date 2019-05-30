<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public $timestamps = true;
    protected $table = 'types';
    protected $fillable = [
        'nome',
        'descricao',
    ];

    public function tournament(){
        return $this->hasMany(Tournament::class);
    }
}
