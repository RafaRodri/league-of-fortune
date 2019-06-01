@extends('templates.master')

@section('content.view')
    <div class="my-3">
        <a href="{{ route('dash.tournaments.index') }}" class="btn-lg btn-secondary active">Meus torneios</a>
        <a href="{{ route('dash.tournaments.create') }}" class="btn-lg btn-secondary">Criar novo</a>
    </div>

    @yield('dash.content.view')
@endsection
