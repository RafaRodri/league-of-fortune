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
                        <table class="table text-center">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">
                                    <button type="button" class="prev btn p-0 px-1"><<</button>
                                </th>
                                <th scope="col" colspan="5"><span class="round">{!! $round !!}</span>ª rodada</th>
                                <th scope="col">
                                    <button type="button" class="next btn p-0 px-1">>></button>
                                </th>
                            </tr>
                            </thead>
                            <tbody id="load-games">
                            <!-- Carregar jogos -->
                            @include('tournament.games', ['game_list' => $games, 'round' => $round])
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js.view')
    <script type="text/javascript">
        $('.prev').on('click', function () {
            var round = $('.round').text();
            alert(round);
        });

        $('.next').on('click', function () {
            var round = $('.round').text();
            alert(round);
        });
    </script>
@endsection
