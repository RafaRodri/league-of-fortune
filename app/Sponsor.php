<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    public $timestamps = true;
    protected $table = 'sponsors';
    protected $fillable = [
        'nome',
        'url_logo_png',
        'descricao',
    ];

    public function tournament(){
        return $this->hasMany(Tournament::class);
    }
}
