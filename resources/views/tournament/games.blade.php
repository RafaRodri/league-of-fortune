@foreach($games->where('rodada', $round) as $game)
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
        <!-- Time 1 -->
        <td>
            <a href="https://cartolafc.globo.com/#!/time/{!! $game->team[0]->id_cartola.'/'.$game->rodada !!}"
               target="_blank">
                <i class="fas fa-external-link-alt"></i> {!! strtoupper(substr($team1, 0, 3)) !!}
            </a>
        </td>
        <td><img width="30" height="30" title="{!! $team1 !!}" alt="{!! $team1 !!}" src="{!! $shield1 !!}"></td>
        <td class="{!! $id1 == $win ? 'text-success' : '' !!}">{!! $score1 !!}</td>

        <td>x</td>

        <!-- Time 2 -->
        <td class="{!! $id2 == $win ? 'text-success' : '' !!}">{!! $score2 !!}</td>
        <td><img width="30" height="30" title="{!! $team2 !!}" alt="{!! $team2 !!}" src="{!! $shield2 !!}"></td>
        <td>
            <a href="https://cartolafc.globo.com/#!/time/{!! $game->team[1]->id_cartola.'/'.$game->rodada !!}"
               target="_blank">
                {!! strtoupper(substr($team2, 0, 3)) !!} <i class="fas fa-external-link-alt"></i>
            </a>
        </td>
    </tr>
@endforeach
