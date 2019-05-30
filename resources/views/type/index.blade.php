@extends('templates.master')

@section('content.view')
    <h1>Teste relacionamento</h1>
    <h3>Nome: {!! $tournament->nome !!}</h3>
    <h3>Tipo: {!! $tournament->type->nome !!}</h3>

    @foreach($tournament->game as $game)
        <h3>Times: {!! $game->nome !!}</h3>
    @endforeach
@endsection
