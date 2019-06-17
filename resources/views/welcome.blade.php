@extends('layouts.app')

@section('content')
    <!--Inicio conteiner-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-top">
                <!--Inicio Carousel-->
                <div id="video-carousel-example2" class="carousel slide carousel-fade margin-top" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
                        <li data-target="#video-carousel-example2" data-slide-to="1"></li>
                        <li data-target="#video-carousel-example2" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <!-- Primeiro Vídeo-->
                        <div class="carousel-item active ">
                            <div class="view cvideos1">
                                <!--Video-->
                                <video class="video-fluid cvideos" width="100%" autoplay loop muted>
                                    <source src="https://mdbootstrap.com/img/video/Tropical.mp4" type="video/mp4" />
                                </video>
                                <div class="mask rgba-indigo-light"></div>
                            </div>
                            <!--Texto-->
                            <div class="carousel-caption">
                                <div class="animated fadeInDown">
                                    <h3 class="h3-responsive"><strong>Viage!</strong></h3>
                                    <p>Compartinhe experiências.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Fim Primeiro Vídeo-->

                        <!-- Segundo Vídeo -->
                        <div class="carousel-item">
                            <div class="view">
                                <!--Video-->
                                <video class="video-fluid cvideos" width="100%" autoplay loop muted>
                                    <source src="https://mdbootstrap.com/img/video/forest.mp4" type="video/mp4" />
                                </video>
                                <div class="mask rgba-purple-slight"></div>
                            </div>
                            <!--Texto-->
                            <div class="carousel-caption">
                                <div class="animated fadeInDown">
                                    <h3 class="h3-responsive">Conecte-se!</h3>
                                    <p>Conheça pessoas pelo mundo.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Fim Segundo Vídeo -->

                        <!-- Terceiro Vídeo -->
                        <div class="carousel-item">
                            <div class="view">
                                <!--Video-->
                                <video class="video-fluid cvideos" width="100%" autoplay loop muted>
                                    <source src="https://mdbootstrap.com/img/video/Agua-natural.mp4" type="video/mp4" />
                                </video>
                                <div class="mask rgba-black-strong"></div>
                            </div>

                            <!--Texto-->
                            <div class="carousel-caption">
                                <div class="animated fadeInDown">
                                    <h3 class="h3-responsive">Conheça!</h3>
                                    <p>Novos lugares.<p>
                                </div>
                            </div>
                        </div>
                        <!-- Fim Terceiro -->
                    </div>
                    <!-- Fim Carrosel -->
                    <!--Controles-->
                    <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controles-->
                </div>
            </div>
        </div>
    </div>
    <!--Fim do conteiner-->

    <!-- Imagens Novo conteiner-->
    <div class=" container">
        <div class="imgcar row mt-3 mb-3 mr-3 ml-1">
            <div class="col-lg-2 col-md-12 mb-3">

                <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-2">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(78).jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-2">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(79).jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-2 col-md-12 mb-2">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(81).jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-2">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(82).jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="imgcar col-lg-2 col-md-6 mb-2">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(84).jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <div class="conteiner sticky-top">
            <div class="row">
                <div class="col-lg-10 mx-auto mt-2">
                    <ul class="navind ul-header mr-5 " id="navind">
                        @guest
                            <li class="nav-item h5">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link h5" href="{{ route('register') }}">Cadastra-se</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="{{route('profile')}}" class="dropdown-item"> Meu Perfil</a>
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
                            <li class="nav-item">
                                <a class="nav-link h5" href="{{ route('quemsomos') }}">Quem Somos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link h5" href="{{ route('faq') }}">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link h5" href="{{ route('contato') }}">Contato</a>
                            </li><li class="nav-item">
                                <a class="nav-link h5" href="{{ route('artigos') }}">Artigos</a>
                            </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="exampleDropdownFormEmail2">E-mail:</label>
                            <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <label for="exampleDropdownFormPassword2">Senha:</label>
                            <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Senha">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                            <label class="form-check-label" for="dropdownCheck2">
                                Lembre me
                            </label>
                            <a href="#">Esqueceu sua senha?</a>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                        <button type="button" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="list-group-flush">
                <hr>
                <span class="titulo001">
                    <strong><h2>Veja o que outros viajantes dizem</h1></strong>
                </span>
                <div class="list-group-item">
                    <table>
                        <tr>
                    <p class="mb-0"><span class="glyphicon glyphicon-star-empt" aria-hedden="true"></span><td><img class="fotoperf mb-0"
                        src="/img/perfil11.png" alt="img perfil"
                        width="120"></td> <span class="glyphicon glyphicon-star-empt" aria-hedden="true"></span></p>
                        <span>
                            <em>Viagem para </em><strong>Disney</strong>
                        </span>
                        <hr>
                        <td>
                            O lugar é lindo, realizei o meu sonho de criança nessa viagem, foi melhor
                            doque eu pensei, eu recomendo para quem estiver a fim de uma nova aventura
                            emocionante e maravilhosa. 
                        </td>
                        </tr>
                    </table>
                </div>
                <hr>
                <div class="list-group-item">
                <table>
                        <tr>
                    <p class="mb-0"><span class="glyphicon glyphicon-star-empt" aria-hedden="true"></span><td><img class="fotoperf mb-0"
                        src="/img/perfil02.png" alt="img perfil"
                        width="120"></td> <span class="glyphicon glyphicon-star-empt" aria-hedden="true"></span></p>
                        <span>
                            <em>Viagem para </em><strong>Canadá</strong>
                        </span>
                        <hr>
                        <td>
                            Adorei a viagem para o Canadá.. o lugar é lindo e friozinho, ah lá tem uma cafeteria
                            muito boa e também gostei das paisagens lindas que vi por lá, espero voltar um dia para
                            esquiar com minha familia. 
                        </td>
                        </tr>
                    </table>                    
                </div>
                <hr>
                <div class="list-group-item">
                <table>
                        <tr>
                    <p class="mb-0"><span class="glyphicon glyphicon-star-empt" aria-hedden="true"></span><td><img class="fotoperf mb-0"
                        src="/img/terceira.png" alt="img perfil"
                        width="120"></td> <span class="glyphicon glyphicon-star-empt" aria-hedden="true"></span></p>
                        <span><em>Viagem para </em><strong>Africa do Sul</strong></span>
                        <hr>
                        <td>
                        Nossa viagem foi perfeita, só tenho a agradecer a querida Paola, que traçamos juntas, essa viagem tão bacana e rica culturalmente. 
                        Que fez um trabalho impecável desde aéreo, hotéis (que amamos) e aluguel de carro, foi completa. E olha, já faço viagens na 
                        Viagem Express a 3 anos, eu e meu marido, nossa família toda e até meus amigos, tudo devido ao impecável atendimento da Paola, que faz toda a viagem, dá dicas e ainda consegue bom preço. Reclamações não tenho nenhuma, mais sugestão eu tenho, manter a Paola,
                        como funcionaria, adoramos ela..rs! Obrigada. E em breve faremos outra viagem com vcs!
                        </td>
                        </tr>
                    </table>
                </div>
                <hr>
            </div>

            <!-- Card Wider -->
            <div class="card card-cascade wider">
            <span class="titulo001">
                <strong>Experiências</strong>
            </span>
                <hr>
                <!-- Card Narrower -->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card card-cascade narrower">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top"
                                     src="https://s2.best-wallpaper.net/wallpaper/1920x1080/1107/Waterfall-river-green_1920x1080.jpg"
                                     alt="Card image cap">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade">

                                <!-- Label -->
                                <!-- <h5 class="pink-text pb-2 pt-1"><i class="fas fa-utensils"></i> Gastronomia</h5> -->
                                <!-- Title -->
                                <h4 class="font-weight-bold card-title">Experimente diferentes lugares pelo mundo.</h4>
                                <!-- Text -->
                                <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                                    suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>

                            </div>

                        </div>
                    </div>
                    <!-- Card Narrower -->

                    <!-- Card Regular -->
                    <div class="col-sm-4">
                        <div class="card card-cascade">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" src="https://i.ytimg.com/vi/hutVEX7M8tw/maxresdefault.jpg"
                                     alt="Card image cap">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade text-center">

                                <!-- Title -->
                                <h4 class="card-title"><strong>Beto Carrero World</strong></h4>
                                <!-- Text -->
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,
                                    ex, recusandae. Facere modi sunt, quod quibusdam.
                                </p>

                            </div>

                        </div>
                    </div>

                    <!-- Card Regular -->

                    <!-- Card Wider -->
                    <div class="col-sm-4">
                        <div class="card card-cascade wider">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" src="https://wallpaperplay.com/walls/full/e/3/d/223749.jpg"
                                     alt="Card image cap">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade text-center">

                                <!-- Title -->
                                <h4 class="card-title"><strong>Conheça Nova York</strong></h4>
                                <!-- Text -->
                                <p class="card-text">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium
                                    doloremque laudantium, totam rem aperiam. </p>

                            </div>

                        </div>
                    </div>
                </div>

                <hr>
                <!-- Card Wider -->
                <div class="card card-cascade wider">



                    <!-- Card Narrower -->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card card-cascade narrower">

                                <!-- Card image -->
                                <div class="view view-cascade overlay">
                                    <img class="card-img-top"
                                         src="https://data.1freewallpapers.com/download/wooden-bridge-over-waterfalls.jpg"
                                         alt="Card image cap">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                                <!-- Card content -->
                                <div class="card-body card-body-cascade">
                                    <!-- Title -->
                                    <h4 class="font-weight-bold card-title">Cachoeiras maravilhosas</h4>
                                    <!-- Text -->
                                    <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam
                                        corporis suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>

                                </div>

                            </div>
                        </div>
                        <!-- Card Narrower -->

                        <!-- Card Regular -->
                        <div class="col-sm-4">
                            <div class="card card-cascade">

                                <!-- Card image -->
                                <div class="view view-cascade overlay">
                                    <img class="card-img-top" src="data:image/jpeg;base64,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"
                                         alt="Card image cap">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                                <!-- Card content -->
                                <div class="card-body card-body-cascade text-center">

                                    <!-- Title -->
                                    <h4 class="card-title"><strong>Walt Disney World Resort</strong></h4>
                                    <!-- Text -->
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Voluptatibus, ex, recusandae. Facere modi sunt, quod quibusdam.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <!-- Card Regular -->

                        <!-- Card Wider -->
                        <div class="col-sm-4">
                            <div class="card card-cascade wider">

                                <!-- Card image -->
                                <div class="view view-cascade overlay">
                                    <img class="card-img-top" src="https://images2.alphacoders.com/874/874814.jpg"
                                         alt="Card image cap">
                                    <a href="#!">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                                <!-- Card content -->
                                <div class="card-body card-body-cascade text-center">

                                    <!-- Title -->
                                    <h4 class="card-title"><strong>Safari na África</strong></h4>
                                    <!-- Text -->
                                    <p class="card-text">Sed ut perspiciatis unde omnis iste natus sit voluptatem
                                        accusantium doloremque laudantium, totam rem aperiam. </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
@endsection

