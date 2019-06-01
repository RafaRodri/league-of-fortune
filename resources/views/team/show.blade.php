@extends('templates.master')

@section('content.view')
    <!-- Buscar time -->
    <form class="form-inline my-3">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>

    <!-- Informações do time -->
    <div class="card">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="card-body">
                    <span class="h1 card-title">{!! $team->nome_time !!}</span>
                    <h5 class="card-subtitle text-muted mb-5">{!! $team->nome_cartola !!}</h5>

                    <h3 class="card-text">Liga: Diamante <span class="h5 text-secondary">(3º)</span></h3>
                    <h4 class="card-text">
                        {!! $team->vitorias*3+$team->empates*1 !!} pontos
                        <span class="h5 text-secondary">
                            ({!! $team->vitorias !!} -
                            {!! $team->empates !!} -
                            {!! $team->derrotas !!})
                        </span>
                    </h4>
                    <hr>
                    <h5 class="card-text">{!! $team->pontos_favor !!} pontos<span class="h6 text-secondary font-italic"> (a favor)</span></h5>
                    <h5 class="card-text">{!! $team->pontos_contra !!} pontos<span class="h6 text-secondary font-italic"> (contra)</span></h5>
                    <h5 class="card-text">{!! $team->pontos_favor-$team->pontos_contra !!} pontos &nbsp;<span class="h6 text-secondary font-italic"> (de saldo)</span></h5>
                    <hr>
                    <h5 class="card-text">
                        @php
                            /*
                             * ============
                             * CRIAR HELPER
                             * ============
                             */
                            $pontos = ($team->vitorias*3)+($team->empates*1)+($team->derrotas*0);
                            $pontos_disputados = (($team->vitorias+$team->empates+$team->derrotas)*3);
                            $aproveitamento = $pontos / $pontos_disputados * 100;

                            echo number_format($aproveitamento, 2, ',', '.')
                        @endphp
                        % de aproveitamento
                    </h5>
                    <p class="card-text">
                        <small class="text-muted">Está na final da copa.</small>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <img class="card-img p-3" alt="Real Flush"
                     src="{!! $team->url_escudo_png !!}">
            </div>
        </div>
    </div>

    <div class="row justify-content-between">
        <!-- Jogos do time -->
        <div class="col-6">
            <h1 class="mt-5">Jogos</h1>
            <div class="overflow-auto" style="height: 890px;">
                <table class="table text-center">
                    <tbody>
                    @for($i = 1; $i <= 39; $i++)
                        @php
                            $home = rand(50,120);
                            $away = rand(50,120);

                            if($home > $away)
                                $win = 'home';
                            elseif($home < $away)
                                $win = 'away';
                        @endphp
                        <tr>
                            <td class="py-2">{!! $i !!}ª rodada</td>
                            <td class="py-2">
                                RFL
                                <img width="30" height="30" title="Real Flush"
                                     src="https://s2.glbimg.com/V-TF4v2mTQgZeZMxpfNoYp1wvCc=/https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_104/escudo/c3/29/21/00921d9260-6e4f-41fb-9a3f-9749b30b7ec320180402152921">
                            </td>
                            <td class="py-2 {!! ($win == 'home') ? 'text-success' : 'text-danger' !!}">{!! $home !!}</td>
                            <td class="py-2">x</td>
                            <td class="py-2 {!! ($win == 'away') ? 'text-success' : 'text-danger' !!}">{!! $away !!}</td>
                            <td class="py-2">
                                <img width="30" height="30" title="Real Flush"
                                     src="https://s2.glbimg.com/V-TF4v2mTQgZeZMxpfNoYp1wvCc=/https://s3.glbimg.com/v1/AUTH_58d78b787ec34892b5aaa0c7a146155f/cartola_svg_104/escudo/c3/29/21/00921d9260-6e4f-41fb-9a3f-9749b30b7ec320180402152921">
                                RFL
                            </td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Curiosidades do time -->
        <div class="col-6">
            <h1 class="mt-5">Curiosidades</h1>



            <div class="card my-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img class="card-img" alt="Jorge"
                             src="https://s.glbimg.com/es/sde/f/2019/04/30/d5b0b482b84d690a1f796957d38dd952_140x140.png">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Maior pontuador</h3>
                        <span class="h2 card-title">Jorge</span>
                        <h5 class="card-subtitle mb-2 text-muted">Lateral</h5>
                        <span class="h5 card-text">17.40 pontos</span>
                        <h6 class="card-text">4ª Rodada</h6>
                    </div>
                </div>
            </div>
            <div class="card my-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img class="card-img-top" alt="Diego Alves"
                             src="https://s.glbimg.com/es/sde/f/2019/04/26/7bdeffe6895011f6895be4a6de311fbe_140x140.png">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Menor pontuador</h3>
                        <span class="h2 card-title">Diego Alves</span>
                        <h5 class="card-subtitle mb-2 text-muted">Goleiro</h5>
                        <span class="h5 card-text">-4.00 pontos</span>
                        <h6 class="card-text">5ª Rodada</h6>
                    </div>
                </div>
            </div>
            <div class="card my-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img class="card-img-top" alt="Víctor Cuesta"
                             src="https://s.glbimg.com/es/sde/f/2018/04/08/b6cd86f9590fd3e82cb545ac74dc8c41_140x140.png">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Mais escalado</h3>
                        <span class="h2 card-title">Víctor Cuesta</span>
                        <h5 class="card-subtitle mb-2 text-muted">Zagueiro</h5>
                        <span class="h5 card-text">3 vezes</span>
                    </div>
                </div>
            </div>
            <div class="card my-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img class="card-img-top" alt="Everton"
                             src="https://s.glbimg.com/es/sde/f/2018/05/18/997feae679bb584848d2ef5197f0b406_140x140.png">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Maior valorização</h3>
                        <span class="h2 card-title">Everton</span>
                        <h5 class="card-subtitle mb-2 text-muted">Atacante</h5>
                        <span class="h5 card-text">+ C$ 2.88</span>
                        <h6 class="card-text">2ª Rodada</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
