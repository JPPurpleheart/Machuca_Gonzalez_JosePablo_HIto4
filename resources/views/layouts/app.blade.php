<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../index.css">
</head>
<body>
    <div id="app">
        <div class="col-12 bg-primary" id="header">
            <nav class="navbar navbar-light" id="menu-hamburguesa">
                <ul style="list-style-type: none;" id="menu-sub-hamburguesa">
                    <li class="col-12" style="width: 168px;">
                        <img src="./img/logo.png" class="col-12" id="logo" height="168px" alt="Logo Horeb San Pablo">
                    </li>
                    <li class="col-12" id="lista-hamburguesa">
                        <div class="containwhiteuid">
                            <a class="navbar-brand text-light" href="../">Iglesia Cristiana Evangélica Horeb (San Pablo)</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto" id="lista-hamburguesa">
                                    <li class="nav-item"><a class="nav-link active text-light" aria-current="page" href="../">Inicio</a></li>
                                    <li class="nav-item /*dropdown*/">
                                    <a class="nav-link dropdown-toggle text-light" data-toggle="dropdown" href="recursos.html" role="button" aria-haspopup="true" aria-expanded="false">Recursos</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ url('libro/') }}">Librería Horeb</a>
                                        <!-- <a class="dropdown-item" href="#">Boletines</a>
                                        <a class="dropdown-item" href="#">Alabanzas</a>
                                        <a class="dropdown-item" href="#">Predicaciones</a>
                                        <a class="dropdown-item" href="#">Cursos en Vídeo</a> -->
                                    </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-light" data-toggle="dropdown" href="nuestros_ministerios.html" role="button" aria-haspopup="true" aria-expanded="false">Nuestros Ministerios</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="nuestros_ministerios.html#estudios_biblicos">Estudios Bíblicos
                                            <a class="dropdown-item" href="nuestros_ministerios.html#intercesion">Intercesión</a>
                                            <a class="dropdown-item" href="nuestros_ministerios.html#mision_cazalla">Misión Cazalla de la Sierra</a>
                                            <a class="dropdown-item" href="nuestros_ministerios.html#despensa">Despensa y Ropero</a>
                                            <a class="dropdown-item" href="nuestros_ministerios.html#culto_oracion">Cultos de Oración</a>
                                            <a class="dropdown-item" href="nuestros_ministerios.html#reunion_jovenes">Reuniones de Jóvenes</a>
                                            
                                                <hr class="dropdown-divider">
                                            
                                            <a class="dropdown-item" href="nuestros_ministerios.html#">Alabanza</a>
                                            <a class="dropdown-item" href="nuestros_ministerios.html#">Escuela Dominical</a>
                                            <a class="dropdown-item" href="nuestros_ministerios.html#">Investigadores de la Biblia</a>
                                            <a class="dropdown-item" href="nuestros_ministerios.html#">Predicación de la Palabra</a>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link text-light" aria-current="page" href="localizacion.html">Localización y contacto</a></li>
                                    <li class="nav-item"><a class="nav-link text-light" aria-current="page" href="login.html">Login</a></li>
                                    <form class="d-flex">
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-light text-light" type="submit">Search</button>
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            <nav class="navbar-md navbar-light" id="menu-expandido">
                <ul style="list-style-type: none;" class="col-12 d-inline-flex" id="menu-sub-expandido">
                    <li style="width: 168px;">
                        <img src="./img/logo.png" class="col-12" height="168px" alt="Logo Horeb San Pablo">
                    </li>
                    <li class="col-11" id="lista-expandida">
                        <ul class="nav nav-tabs" id="lista-expandida">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../">Inicio</a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" data-toggle="dropdown" href="recursos.html" role="button" aria-haspopup="true" aria-expanded="false">Recursos</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('libro/') }}">Librería Horeb</a>
                                <!-- <a class="dropdown-item" href="#">Boletines</a>
                                <a class="dropdown-item" href="#">Alabanzas</a>
                                <a class="dropdown-item" href="#">Predicaciones</a>
                                <a class="dropdown-item" href="#">Cursos en Vídeo</a> -->
                            </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-light" data-toggle="dropdown" href="nuestros_ministerios.html" role="button" aria-haspopup="true" aria-expanded="false">Nuestros Ministerios</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="nuestros_ministerios.html#estudios_biblicos">Estudios Bíblicos
                                    <a class="dropdown-item" href="nuestros_ministerios.html#intercesion">Intercesión</a>
                                    <a class="dropdown-item" href="nuestros_ministerios.html#mision_cazalla">Misión Cazalla de la Sierra</a>
                                    <a class="dropdown-item" href="nuestros_ministerios.html#despensa">Despensa y Ropero</a>
                                    <a class="dropdown-item" href="nuestros_ministerios.html#culto_oracion">Cultos de Oración</a>
                                    <a class="dropdown-item" href="nuestros_ministerios.html#reunion_jovenes">Reuniones de Jóvenes</a>
                                    
                                        <hr class="dropdown-divider">
                                    
                                    <a class="dropdown-item" href="nuestros_ministerios.html#">Alabanza</a>
                                    <a class="dropdown-item" href="nuestros_ministerios.html#">Escuela Dominical</a>
                                    <a class="dropdown-item" href="nuestros_ministerios.html#">Investigadores de la Biblia</a>
                                    <a class="dropdown-item" href="nuestros_ministerios.html#">Predicación de la Palabra</a>
                                </div>
                            </li>
                            <li class="nav-item"><a class="nav-link text-light" aria-current="page" href="localizacion.html">Localización y
                                    contacto</a></li>
                            <li class="nav-item"><a class="nav-link bg-light text-primary" aria-current="page" href="login.html">Login</a></li>
                            <form class="d-flex align-items-center">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-light text-light" type="submit">Search</button>
                            </form>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                    <!-- Left Side Of Navbar -->
                    <!-- <ul class="navbar-nav me-auto">

                    </ul> -->

                    <!-- Right Side Of Navbar -->
                    <!-- <ul class="navbar-nav ms-auto"> -->
                        <!-- Authentication Links -->
                        <!-- @guest
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
        </nav> -->

        <div class="col-12 d-flex" style="padding: 0">
            <div class="col-2" style="padding: 0">
                <div class="bg-dark" style="height: 100vh;">
                    <nav class="nav nav-bar">
                        <ol class="col-12 list-group" style="box-sizing: revert !important">
                            <li class="list-group-item bg-dark"><a class="text-light" href="{{ url('libro/') }}">Librería</a></li>
                            <li class="list-group-item bg-dark"><a class="text-light" href="{{ url('prestamo/') }}">Prestamo</a></li>
                            <li class="list-group-item bg-dark"><a class="text-light" href="{{ url('folleto/') }}">Folletos Entregados</a></li>
                            <li class="list-group-item bg-dark"><a class="text-light" href="{{ url('ropero/') }}">Ropero</a></li>
                            <li class="list-group-item bg-dark"><a class="text-light" href="{{ url('despensa/') }}">Despensa</a></li>
                            <li class="list-group-item bg-dark"><a class="text-light" href="{{ url('usuario/') }}">Usuarios</a></li>
                            <li class="list-group-item bg-dark"><a class="text-light" href="{{ url('recibe/') }}">Recepción</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <main class="col-10 d-flex py-4">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
