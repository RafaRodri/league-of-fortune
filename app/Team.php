<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public $timestamps = true;
    protected $table = 'teams';
    protected $fillable = [
        'id_cartola',
        'nome_cartola',
        'nome_time',
        'slug_time',
        'facebook_id',
        'url_escudo_png',
        'url_escudo_svg',
        'foto_perfil',
        'vitorias',
        'derrotas',
        'empates',
        'pontos_favor',
        'pontos_contra',
    ];
    protected $hidden = [];


    /*Relacionamentos*/
    public function games()
    {
        return $this->belongsToMany(Game::class, 'teams_games', 'id_game');
    }

    public function tournaments()
    {
        return $this->belongsToMany(Tournament::class, 'teams_tournaments', 'id_tournament', 'id_team');
    }

    public function ranking()
    {
        return $this->hasMany(TeamsTournaments::class, 'id_team');
    }


    /*Métodos acessores*/
    public function getVitoriasAttribute()
    {
        return $this->ranking()->first()->vitorias;
    }

    public function getDerrotasAttribute()
    {
        return $this->ranking()->first()->derrotas;
    }

    public function getEmpatesAttribute()
    {
        return $this->ranking()->first()->empates;
    }

    public function getPontosFavorAttribute()
    {
        return $this->ranking()->first()->pontos_favor;
    }

    public function getPontosContraAttribute()
    {
        return $this->ranking()->first()->pontos_contra;
    }

    public function getTotalJogosAttribute()
    {
        $jogos = $this->vitorias + $this->empates + $this->derrotas;

        return $jogos;
    }

    public function getTotalPontosAttribute()
    {
        $pontos = ($this->vitorias * 3) + ($this->empates * 1);

        return $pontos;
    }

    public function getAproveitamentoAttribute()
    {
        $aproveitamento = $this->getTotalPontosAttribute() / ($this->getTotalJogosAttribute() * 3);

        return $aproveitamento * 100;
    }

    public function getSaldoPontosAttribute()
    {
        $saldo = $this->pontos_favor - $this->pontos_contra;

        return $saldo;
    }
}
