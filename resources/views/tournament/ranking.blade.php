<table class="table text-center">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col">P</th>
        <th scope="col">J</th>
        <th scope="col">V</th>
        <th scope="col">E</th>
        <th scope="col">D</th>
        <th scope="col">PF</th>
        <th scope="col">PC</th>
        <th scope="col">SP</th>
        <th scope="col">%</th>
        <th scope="col">C$</th>
    </tr>
    </thead>
    <tbody>
    @php $i = 0; @endphp

    @foreach($teams as $team)
    @php
        $i++;

        /*Cores legenda*/
        switch ($i) {
            case 1:
                $color = '#2589c3';
                break;
            case 2:
                $color = '#00afcc';
                break;
            case 3:
            case 4:
                $color = '#6ac9d8';
                break;
            case 5:
            case 6:
            case 7:
            case 8:
                $color = '#a9d9e0';
                break;
            case 17:
            case 18:
            case 19:
            case 20:
                $color = '#de7877';
                break;
            default:
                $color = '#fff5af';
        }
    @endphp
    <tr>
        <td style="background-color: {!! $color !!};">
            {!! $i !!}º
        </td>
        <th scope="row" class="text-left text-truncate" style="max-width: 120px;">
            <!-- escudo -->
            <img class="" width="15" height="15" title="{!! $team->nome_time !!}" alt="{!! $team->nome_time !!}"
                 src="{!! $team->url_escudo_png !!}">

            <!-- nome do time -->
            <a href="{{ route('team.show', ['id' => $team->id]) }}">
                {!! $team->nome_time !!}
            </a>
        </th>
        <td class="font-weight-bold text-success">{!! $team->TotalPontos !!}</td>
        <td>{!! $team->TotalJogos !!}</td>
        <td>{!! $team->vitorias !!}</td>
        <td>{!! $team->empates !!}</td>
        <td>{!! $team->derrotas !!}</td>
        <td class="text-truncate">{!! $team->pontos_favor !!}</td>
        <td class="text-truncate">{!! $team->pontos_contra !!}</td>
        <td class="text-truncate">{!! $team->saldoPontos !!}</td>
        <td>{!! number_format($team->aproveitamento, 2, ',', '.') !!}</td>
        <td class="text-danger">{!! rand(100,200).",".rand(10,99) !!}</td>
    </tr>
@endforeach

    </tbody>
</table>
