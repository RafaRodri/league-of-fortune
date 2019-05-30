@extends('templates.master')

@section('content.view')
    @php
        $i = 0;
    @endphp
    @foreach($teams as $team)
        @php
            $i++;
        @endphp
            <a href="{{ route('team.show', ['id' => $team->id]) }}" class="mb-3 btn btn-primary">
                {!! $team->nome_time !!}
            </a>
        @if($i%4==0)
            <br>
        @endif
    @endforeach
@endsection
