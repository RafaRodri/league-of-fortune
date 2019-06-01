@extends('dashboard.tournament.master')

@section('content.view')
    {{--@php

        $qtd_times = 4;
        $rodadas = ($qtd_times-1)*2;
        $jogos_por_rodada = $qtd_times/2;
        $id_torneio = 1; /*Request*/
        $id_rodada = 0;
        $id_game = 0;
        $reinicio = 1;

        for ($i = 1; $i <= $rodadas; $i++){
            /*echo '<code>// create ROUND '.$i.'</code>';
            echo '<code> ----- RETORNA $id_rodada: '.++$id_rodada.'</code>';*/
            ++$id_rodada;

            echo '<br><span class="h5">Rodada ' . $i . '</span>';

            $m = [];
            $time = 0;

            for($k = 1; $k <= $jogos_por_rodada; $k++){
                $m[$k][0] = $time;

                if($time == 0){
                    $time = $reinicio;
                }elseif($time == $qtd_times-1){
                    $time = 1;
                }else{
                    $time++;
                }
            }
            for($z = $jogos_por_rodada; $z >= 1; $z--){
                $m[$z][1] = $time;

                if($z == 1){
                    $reinicio = $time;
                }

                if($time == $qtd_times-1){
                    $time = 1;
                }else{
                    $time++;
                }
            }

            echo '<code>// Game::create(["id_torneio" => '.$id_torneio.', "rodada" => '.$id_rodada.', "vencedor" => null, "data" => null]);</code>';
            echo '<code> ----- RETORNA $id_game: '.++$id_game.'</code>';

            if($i % 2 == 0){
                foreach($m as $matriz){
                    echo'<br>________________________________________________________________________<br>';
                    /*echo '<br><code>// create GAME id_rodada('.$id_rodada.') e id_torneio('.$id_torneio.')</code>';
                    echo '<code> ----- RETORNA $id_game: '.++$id_game.'</code>';
                    echo'<br>____________________________________<br>';*/

                    echo '<code>// create TEAMS_GAMES id_team('.$matriz[0].') e id_game('.$id_game.')</code>';
                    echo '<br><code>// create TEAMS_GAMES id_team('.$matriz[1].') e id_game('.$id_game.')</code>';
                }
            }else{
                foreach($m as $matriz){
                    echo'<br>________________________________________________________________________<br>';
                    /*echo '<br><code>// create GAME id_rodada('.$id_rodada.') e id_torneio('.$id_torneio.')</code>';
                    echo '<code> ----- RETORNA $id_game: '.++$id_game.'</code>';
                    echo'<br>____________________________________<br>';*/

                    echo '<code>// create TEAMS_GAMES id_team('.$matriz[1].') e id_game('.$id_game.')</code>';
                    echo '<br><code>// create TEAMS_GAMES id_team('.$matriz[0].') e id_game('.$id_game.')</code>';
                }
            }

            echo'<br><br><br><br>';
        }

    @endphp--}}

    @if(!is_null($tournament))
        <div class="border border-secondary rounded py-2">
            <h1 class="px-5">
                <a href="javascript:history.back()" class="text-secondary"><i class="fas fa-arrow-alt-circle-left"></i></a>
                {!! $tournament->type->nome . ' ' . $tournament->nome !!}
            </h1>

            <table class="dash-games table text-center">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Confronto</th>
                    <th scope="col">Vencedor</th>
                </tr>
                </thead>
                <tbody>

                @for($i=1; $i<=$rodadas;$i++)
                    <tr>
                        <td class="h3 border-top border-dark" colspan="3">Rodada {!! $i !!}</td>
                    </tr>
                    @forelse($games->where('rodada', $i) as $game)
                        @php
                            /* Atribuir variáveis do jogo */
                            $id1 = $game->team[0]->id;
                            $team1 = $game->team[0]->nome_time;
                            $shield1 = $game->team[0]->url_escudo_png;
                            $score1 = $game->score[0]->pontos;

                            $id2 = $game->team[1]->id;
                            $team2 = $game->team[1]->nome_time;
                            $shield2 = $game->team[1]->url_escudo_png;
                            $score2 = $game->score[1]->pontos;

                            $win = $game->vencedor;
                        @endphp
                        <tr>
                            <td>XX/XX/XXXX{{--{!! $game->data !!}--}}</td>
                            <td>
                                <!-- Time 1 -->
                                <div class="team">
                                    <a href="https://api.cartolafc.globo.com/time/slug/{!! $game->team[0]->slug_time.'/'.$i !!}" target="_blank">
                                        {!! $team1 !!}
                                    </a>
                                </div>
                                <img class="d-none d-md-inline" width="30" height="30" alt="{!! $team1 !!}"
                                     src="{!! $shield1 !!}">
                                <!-- Fim time 1 -->

                                <input type="number" class="form-control">
                                <span>X</span>
                                <input type="number" class="form-control">

                                <!-- Time 2 -->
                                <img class="d-none d-md-inline" width="30" height="30" alt="{!! $team2 !!}"
                                     src="{!! $shield2 !!}">
                                <div class="team">
                                    <a href="https://api.cartolafc.globo.com/time/slug/{!! $game->team[1]->slug_time.'/'.$i !!}" target="_blank">
                                        {!! $team2 !!}
                                    </a>
                                </div>
                                <!-- Fim time 2 -->
                                <button class="btn btn-success m-1" type="button">Confirmar</button>
                            </td>
                            <td>{!! strtoupper(substr($team2, 0, 5)) !!}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Nenhum jogo marcado.</td>
                        </tr>
                    @endforelse
                @endfor

                </tbody>
            </table>
            @else
                <div class="jumbotron">
                    <h1 class="display-4">Torneio não encontrado!</h1>
                </div>
        </div>
    @endif

@endsection
