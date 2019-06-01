<div class="border border-secondary rounded">
    <table class="table text-center mx-auto">
        <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Tipo</th>
            <th scope="col">Temporada</th>
            <th scope="col">Inscritos</th>
            <th scope="col">Vagas</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($tournaments as $tournament)
            @php
                $inscritos = count($tournament->teams);
                $vagas = $tournament->qtd_participantes - $inscritos;
            @endphp
            <tr>
                <th scope="row">{!! $tournament->nome !!}</th>
                <td>{!! $tournament->type->nome !!}</td>
                <td>{!! $tournament->temporada !!}</td>
                <td>{!! $inscritos !!}</td>
                <td>{!! $vagas !!}</td>
                <td>
                    <!-- Button edit -->
                    <a href="{{ route('dash.tournaments.edit', ['id' => $tournament->id]) }}" class="text-secondary"><i class="fas fa-edit"></i></a>

                    <!-- Button delete -->
                    <form action="{{route('dash.tournaments.delete', ['id' => $tournament->id])}}" method="post" class="d-inline-flex">
                        {{ method_field('delete') }}
                        {{ csrf_field() }}
                        <button type="submit" class="delete btn btn-link text-danger p-0"><i class="fas fa-trash-alt"></i></button>
                    </form>

                    <!-- Button participants -->
                    <a href="{{ route('dash.tournaments.show', ['id' => $tournament->id]) }}" class="text-primary"><i class="fas fa-users"></i></a>
                </td>
                <td>
                    @if($vagas == 0)
                        @if($tournament->game->all() == [])
                            <a href="{{ route('dash.games.sort', ['id' => $tournament->id]) }}" class="btn btn-success">Finalizar Inscrição</a>
                        @else
                            <a href="{{ route('dash.games.show', ['id' => $tournament->id]) }}" class="btn btn-primary">Ir para tabela</a>
                        @endif
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
