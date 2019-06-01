<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>League of Fortune</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/font-google-family-nunito.css') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"/>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('css.view')
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('index') }}">League of Fortune</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <!-- Menu usuário -->
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <span class="dropdown-item">Rafael, <p class="m-0">Real Flush</p></span>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('dash.tournaments.index') }}"><i
                                class="fas fa-cogs"></i> Torneio</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Tipos de torneio</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('team.all') }}">Time</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tournament.league') }}">Liga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="{{ route('index.champions') }}">Champions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="{{ route('index.cup') }}">Copa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="{{ route('index.hall') }}">Hall da Fama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index.prize') }}">Prêmios</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container py-3">
        @yield('content.view')
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

@yield('js.view')
</body>
</html>
