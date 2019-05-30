@extends('templates.master')

@section('content.view')
    @include('tournament.categories')

    <!-- Container -->
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-7">
                <!-- Tabela de classificação -->
                @include('tournament.ranking', ['ranking_list' => $teams])
            </div>

            <div class="col-4">
                <div class="row mb-3">
                    <div class="col">
                        <!-- Tabela de maiores pontuações -->
                        @include('tournament.higherScores')
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <!-- Jogos -->
                        @include('tournament.games', ['game_list' => $games])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
