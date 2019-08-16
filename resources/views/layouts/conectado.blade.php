<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Digital-tour') }}</title>
    <link rel="icon" href="{{ asset('img/logonovo3.png')}}">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
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
    <div class="conteudo">
        <header>
            <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg  scrolling-navbar navbar-light double-nav navbar-transparente container-fluid">

                <a href="/"><img src="../img/l1.png" width="120"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navop navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link h5" href="{{ route('feed') }}">Feed</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h5" href="{{ route('gallery') }}">Mural de fotos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h5" href="{{ route('amigos') }}">Amigos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h5" href="{{ route('chat') }}">Chat</a>
                        </li>
                        @guest
                        <li class="nav-item h5">
                            <a class="nav-link h5" href="{{ route('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link h5" href="{{ route('register') }}">Cadastra-se</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle h5" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right h5" aria-labelledby="navbarDropdown">
                                <a href="{{route('perfil')}}" class="dropdown-item">Perfil</a>
                                <a href="{{route('profile')}}" class="dropdown-item">Editar Perfil</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
        <main class="main">
            @yield('content')
        </main>
        <footer class="bg-dark mt-5 footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto text-center mt-4 map">
                        <ul class="list-inline text-center">
                            <li><a href="{{ route('quemsomos') }}">
                                    <span>Quem somos</span>
                                </a></li>
                            <li><span>|</span></li>
                            <li><a href="{{ route('faq') }}">
                                    <span>FAQ</span>
                                </a></li>
                            <li><span>|</span></li>
                            <li><a href="{{ route('enviando') }}">
                                    <span>Contato</span>
                                </a></li>
                            <li><span>|</span></li>
                            <li><a href="{{ route('artigos') }}">
                                    <span>Artigos</span>
                                </a></li>
                            <li><span>|</span></li>
                        </ul>
                        <span class="copyright text-muted"><strong>&copy;Digital tour</strong> - Digital House 2019.</span>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/main1.js')}}"></script>
    <script src="{{asset('unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
    @hasSection('javascript')
    @yield('javascript')
    @endif
</body>

</html>