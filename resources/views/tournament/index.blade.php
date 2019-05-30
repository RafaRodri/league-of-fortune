@extends('templates.master')

@section('content.view')
    <h1>Teste relacionamento</h1>
    <h3>Nome: {!! $tournament->nome !!}</h3>
    <h3>Tipo: {!! $tournament->type->nome !!}</h3>
@endsection
