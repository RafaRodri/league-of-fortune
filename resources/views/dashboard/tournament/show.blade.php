@extends('templates.master')

@section('content.view')
    <div class="border border-secondary rounded py-2 px-5">
        <h1>
            <a href="javascript:history.back()" class="text-secondary"><i class="fas fa-arrow-alt-circle-left"></i></a>
            {!! $tournament->type->nome . ' ' . $tournament->nome !!}
        </h1>



        <h2>Participantes</h2>
        <span class="text-muted">Restam {!! $tournament->qtd_participantes-count($tournament->teams) !!} vagas.</span>


        <form action="{{ route('dash.tournament.participants', ['id' => $tournament->id]) }}" method="post">
            {{ csrf_field() }}


            <div class="row justify-content-around">
                @php($i = 0)
                @foreach($tournament->teams as $team)
                    <div class="col-12 col-md-5 m-1 p-3 rounded-pill border border-secondary bg-white">
                        <div class="row">
                            <div class="col-10">
                                {!! ++$i . ' - '. $team->nome_time !!}
                                <input name="participant[{!! $i !!}]" type="hidden" value="{!! $team->id !!}">
                            </div>
                            <div class="col-2">
                                <!-- Button delete -->
                                {{--<form action="#" method="post" class="d-inline-flex">
                                    {{ method_field('delete') }}
                                    {{ csrf_field() }}--}}
                                    {{--<button type="submit" class="delete btn text-danger p-0"><i class="fas fa-trash-alt"></i></button>--}}
                                {{--</form>--}}
                            </div>
                        </div>
                    </div>
                @endforeach

                @for(++$i; $i <= 20; $i++)
                    <select name="participant[{!! $i !!}]" class="col-12 col-md-5 m-1 p-3 rounded-pill border border-secondary">
                        <option value="">Selecionar time com pgto realizado == 'true'</option>
                        @foreach($free_teams as $free_team)
                            <option value="{!! $free_team->id !!}">{!! $free_team->nome_time !!}</option>
                        @endforeach
                    </select>
                @endfor
            </div>


            <div class="row justify-content-around my-3">
                <div class="col text-center">
                    <button type="submit" class="btn btn-secondary w-75 p-3">Atualizar participantes</button>
                </div>
            </div>
        </form>
    </div>
@endsection
