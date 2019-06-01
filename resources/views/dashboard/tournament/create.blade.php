@extends('dashboard.tournament.master')

@section('dash.content.view')
    <div class="border border-secondary rounded p-5">
        <form action="{{route('dash.tournaments.store')}}" method="post">
            {{ csrf_field() }}

            <div class="row my-3">
                <div class="col">
                    <label for="inputNome">Nome</label>
                    <input name="nome" type="text" class="form-control" id="inputNome" placeholder="Nome" required>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <label for="inputTipo">Tipo</label>
                    <select name="id_tipo" class="custom-select" id="inputTipo">
                        @foreach($types as $type)
                            <option value="{!! $type->id !!}">
                                {!! $type->nome !!}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="inputTemporada">Temporada</label>
                    <input name="temporada" type="number" class="form-control" id="inputTemporada" placeholder="Temporada"
                           min="2019" max="2020" required>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <label for="inputParticipantes">Nº de participantes</label>
                    <input name="qtd_participantes" type="number" class="form-control" id="inputParticipantes" placeholder="Participantes"
                           min="10" max="20" required>
                </div>
                <div class="col">
                    <label for="inputPatrocinio">Patrocínio</label>
                    <select name="id_patrocinio" class="custom-select" id="inputPatrocinio">
                        <option>Sem patrocínio</option>
                        @foreach($sponsors as $sponsor)
                            <option value="{!! $sponsor->id !!}">
                                {!! $sponsor->nome !!}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row my-3">
                <div class="col text-center">
                    <button type="submit" class="btn btn-secondary w-50">Salvar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
