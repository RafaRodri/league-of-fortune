<table class="table text-center">
    <thead class="thead-light">
    <tr>
        <th scope="col">
            <button type="button" class="btn p-0 px-1"><<</button>
        </th>
        <th scope="col" colspan="5">1ª rodada</th>
        <th scope="col">
            <button type="button" class="btn p-0 px-1">>></button>
        </th>
    </tr>
    </thead>
    <tbody>
        @foreach($games as $game)
            @php
                /* Atribuir variáveis do jogo */
                $team1 = $game->team[0]->nome_time;
                $escudo1 = $game->team[0]->url_escudo_png;
                $score1 = $game->score[0]->pontos;

                $team2 = $game->team[1]->nome_time;
                $escudo2 = $game->team[1]->url_escudo_png;
                $score2 = $game->score[1]->pontos;
            @endphp
            <tr>
                <!-- Time 1 -->
                <td>{!! strtoupper(substr($team1, 0, 3)) !!}</td>
                <td><img width="30" height="30" title="{!! $team1 !!}" alt="{!! $team1 !!}" src="{!! $escudo1 !!}"></td>
                <td>{!! $score1 !!}</td>

                <td>x</td>

                <!-- Time 2 -->
                <td>{!! $score2 !!}</td>
                <td><img width="30" height="30" title="{!! $team2 !!}" alt="{!! $team2 !!}" src="{!! $escudo2 !!}"></td>
                <td>{!! strtoupper(substr($team2, 0, 3)) !!}</td>
            </tr>
        @endforeach
    </tbody>
</table>
