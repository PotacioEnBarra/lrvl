<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    <div class="navbar-ui">
        <div class="navbar-side-icons-ui">
            <div class="navbar-icon-ui"></div>
        </div>
        <button class="navbar-side-user-ui" onclick="dropDownMenu()">
            <div class="navbar-side-user-icon-ui"></div>
            <div class="navbar-side-user-name-ui">
                <div class="navbar-side-user-name-title-ui">{{ Auth::user()->name }}</div>
                <div class="navbar-side-user-name-range-ui">Administradora</div>
            </div>
        </button>
        <div id="myDropdown" class="dropdown-content">
            <a href="#">Perfil</a>
            <a href="#">Configuraciones</a>
            <a href="#">Soporte</a>
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                {{ __('Salir') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Perfil</a>
                                    <a class="dropdown-item" href="#">Configuraciones</a>
                                    <a class="dropdown-item" href="#">Soporte</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    </div> --}}
    <div class="sidebar open">
        <div class="logo-details">
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="#">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>
            <br>
            <span class="links_name">Lista</span>
            <br>
            <br>
            <li>
                <a href="#">
                    <i class="bx bx-user"></i>
                    <span class="links_name">Empleados</span>
                </a>
                <span class="tooltip">Empleados</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-chat"></i>
                    <span class="links_name">Cargos</span>
                </a>
                <span class="tooltip">Cargos</span>
            </li>

        </ul>
    </div>
    @yield('content')
</body>

</html>
