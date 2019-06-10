<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Digital-tour') }}</title>
    <link rel="icon" href="{{ asset('img/logorev1.png')}}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Boodstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- CDN Galery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

    <script>
        window.laravel = {!! json_encode([
            'csrf' => csrf_token(),
            'pusher' =>[
                   'key' => config('broadcasting.connections.pusher.key'),
                   'cluster' => config('broadcasting.connections.pusher.options.cluster'),
            ]
        ]) !!}
    </script>

</head>
<body>
<div id="app">
    <header>
        <nav class="navb navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar navbar-light double-nav navbar-transparente container-fluid">
            <!-- <a href="index.html" class="navbar-brand"> -->
            <img  src="{{ asset('img/logorev1.png')}}" width="60">
            <span>Digital Tour</span>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navb1 collapse navbar-collapse" id="navbarTogglerDemo01">
                <!-- <a class="navbar-brand" href="#">DIGITAL TOUR</a> -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Cadastra-se</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('quemsomos') }}">Quem Somos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contato') }}">Contato</a>
                            </li>
                        @endif


                    @else
                        <li class="nav-item dropdown">
                            <a href="{{route('perfil')}}" class="dropdown-item"> Perfil</a>
                            <a href="{{route('home')}}" class="dropdown-item"> Posts</a>
                            <a href="{{route('chat')}}" class="dropdown-item"> Chat</a>
                            <a href="{{route('profile')}}" class="dropdown-item"> Editar Perfil</a>
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>

        </nav>
    </header>
    <main class="py-4">
        @yield('content')
    </main>
    <!-- Footer -->
    <footer class="bg-dark mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto text-center mt-4">
                    <ul class="list-inline text-center">

                        <li class="list-inline-item">
                            <a href="https://github.com/williangomes7004/digital-tour">
                              <span class="fa-stack fa-lg">
                                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                              </span>
                            </a>
                        </li>
                    </ul>
                    <span class="copyright text-muted"><strong>&copy;Digital tour</strong> - Digital House 2019.</span>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
