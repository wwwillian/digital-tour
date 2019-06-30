@extends('layouts.desconectado')

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
                                    <source src="/videos/Tropical.mp4" type="video/mp4" />
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
                                    <source src="/videos/forest.mp4" type="video/mp4" />
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
                                    <source src="/videos/aguanatural.mp4" type="video/mp4" />
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

                <!-- <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div> -->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-2">

                <!--Image-->
                <!-- <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(78).jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div> -->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-2">

                <!--Image-->
                <!-- <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(79).jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div> -->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-2 col-md-12 mb-2">

                <!--Image-->
                <!-- <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(81).jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div> -->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-2">

                <!--Image-->
                <!-- <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(82).jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div> -->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="imgcar col-lg-2 col-md-6 mb-2">

                <!--Image-->
                <!-- <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(84).jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div> -->

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <div class="conteiner sticky-top">
            <div class="row">
                <div class="col-lg-10 mx-auto mt-2">
                    <!-- <ul class="navind ul-header mr-5 " id="navind">
                        <li class="nav-item">
                            <a class="nav-link h5" href="{{ route('contato') }}">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h5" href="{{ route('quemsomos') }}">Quem Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h5" href="{{ route('faq') }}">FAQ</a>
                        </li> -->

<!-- // {{--                        <li class="nav-item">--}}
// {{--                            <a class="nav-link h5" href="{{ route('artigos') }}">Artigos</a>--}}
// {{--                        </li>--}} -->
                        @guest
                            <!-- <li class="nav-item h5">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li> -->
                            @if (Route::has('register'))
                                <!-- <li class="nav-item">
                                    <a class="nav-link h5" href="{{ route('register') }}">Cadastra-se</a>
                                </li> -->
                            @endif
                        @else
                            <!-- <li class="nav-item dropdown"> -->
                                <!-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a> -->

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <!-- <a href="{{route('profile')}}" class="dropdown-item"> Meu Perfil</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a> -->

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

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
                    <h3>Veja o que outros viajantes dizem</h3>
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
                        src="/img/oculos.jpg" alt="img perfil"
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
                <h4>Artigos</h4>
            </span>
                <hr>
                <!-- Card Narrower -->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card card-cascade narrower">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <a href="{{ route('artigos') }}">
                                    
                                    <img class="card-img-top" src="../img/gastro.jpg"
                                         alt="Card image cap">
                                </a>
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade">

                                <!-- Label -->
                                <!-- <h5 class="pink-text pb-2 pt-1"><i class="fas fa-utensils"></i> Gastronomia</h5> -->
                                <!-- Title -->
                                <h4 class="font-weight-bold card-title">Gastronomia Brasileira.</h4>
                                <!-- Text -->
                                <p class="card-text">Culinária brasileira e sua origem..</p>

                            </div>

                        </div>
                    </div>
                    <!-- Card Narrower -->

                    <!-- Card Regular -->
                    <div class="col-sm-4">
                        <div class="card card-cascade">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                            <a href="{{ route('artigos') }}">
                                    
                                <img class="card-img-top" src="../img/photo6.jpg"
                                     alt="Card image cap">
                                    </a>
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade text-center">

                                <!-- Title -->
                                <h4 class="card-title"><strong>Arte</strong></h4>
                                <!-- Text -->
                                <p class="card-text">A importância da arte na vida do homem.
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
                            <a href="{{ route('artigos') }}">
                                    
                                <img class="card-img-top" src="../img/stadium.jpg"
                                     alt="Card image cap">
                                    </a>
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade text-center">

                                <!-- Title -->
                                <h4 class="card-title"><strong>E-sports</strong></h4>
                                <!-- Text -->
                                <p class="card-text">ntenda o que é eSport e saiba como ele virou uma febre mundial </p>

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
                                <a href="{{ route('artigos') }}">
                                    
                                    <img class="card-img-top"
                                         src="../img/ferias.jpeg"
                                         alt="Card image cap">
                                    </a>
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                                <!-- Card content -->
                                <div class="card-body card-body-cascade">
                                    <!-- Title -->
                                    <h4 class="font-weight-bold card-title">Viagens</h4>
                                    <!-- Text -->
                                    <p class="card-text">Preparamos super dicas que vão esclarecer suas dúvidas e facilitar bastante a “difícil” tarefa de viajar pelo mundo!</p>

                                </div>

                            </div>
                        </div>
                        <!-- Card Narrower -->

                        <!-- Card Regular -->
                        <div class="col-sm-4">
                            <div class="card card-cascade">

                                <!-- Card image -->
                                <div class="view view-cascade overlay">
                                <a href="{{ route('artigos') }}">
                                    
                                    <img class="card-img-top" src="../img/musica.jpg"
                                         alt="Card image cap">
                                    </a>
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                                <!-- Card content -->
                                <div class="card-body card-body-cascade text-center">

                                    <!-- Title -->
                                    <h4 class="card-title"><strong>Música</strong></h4>
                                    <!-- Text -->
                                    <p class="card-text"> A música é a principal arte em todo o mundo. Desde tribos indígenas, até em grandes cidades, a música é em especial uma forte presença artística na cultura
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
                                <a href="{{ route('artigos') }}">
                                    
                                    <img class="card-img-top" src="../img/cutulra.jpg"
                                         alt="Card image cap">
                                    </a>
                                    <a href="#!">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                                <!-- Card content -->
                                <div class="card-body card-body-cascade text-center">

                                    <!-- Title -->
                                    <h4 class="card-title"><strong>Cultura Brasileira</strong></h4>
                                    <!-- Text -->
                                    <p class="card-text"> A Cultura Brasileira é o resultado da miscigenação de diversos grupos étnicos que participaram da formação da população brasileira </p>

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

