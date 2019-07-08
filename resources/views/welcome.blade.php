@extends('layouts.desconectado')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div id="video-carousel-example2" class="carousel slide carousel-fade margin-top" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
                    <li data-target="#video-carousel-example2" data-slide-to="1"></li>
                    <li data-target="#video-carousel-example2" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active ">
                        <div class="view cvideos1">
                            <video class="video-fluid cvideos" width="100%" autoplay loop muted>
                                <source src="/videos/Tropical.mp4" type="video/mp4" />
                            </video>
                            <div class="mask rgba-indigo-light"></div>
                        </div>
                        <div class="carousel-caption">
                            <div class="animated fadeInDown">
                                <h3 class="h3-responsive"><strong>Viage!</strong></h3>
                                <p>Compartinhe experiências.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="view">
                            <video class="video-fluid cvideos" width="100%" autoplay loop muted>
                                <source src="/videos/forest.mp4" type="video/mp4" />
                            </video>
                            <div class="mask rgba-purple-slight"></div>
                        </div>
                        <div class="carousel-caption">
                            <div class="animated fadeInDown">
                                <h3 class="h3-responsive">Conecte-se!</h3>
                                <p>Conheça pessoas pelo mundo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="view">
                            <video class="video-fluid cvideos" width="100%" autoplay loop muted>
                                <source src="/videos/aguanatural.mp4" type="video/mp4" />
                            </video>
                            <div class="mask rgba-black-strong"></div>
                        </div>
                        <div class="carousel-caption">
                            <div class="animated fadeInDown">
                                <h3 class="h3-responsive">Conheça!</h3>
                                <p>Novos lugares.<p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class=" container">
    <div class="row">
        <div class="list-group-flush">
            <hr>
            <span class="titulo001">
                <h3>Veja o que outros viajantes dizem</h3>
            </span>
            <div class="list-group-item">
                <table>
                    <tr>
                        <p class="mb-0"><span class="glyphicon glyphicon-star-empt" aria-hedden="true"></span>
                            <td><img class="fotoperf mb-0" src="/img/perfil11.png" alt="img perfil" width="120"></td> <span class="glyphicon glyphicon-star-empt" aria-hedden="true"></span>
                        </p>
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
                        <p class="mb-0"><span class="glyphicon glyphicon-star-empt" aria-hedden="true"></span>
                            <td><img class="fotoperf mb-0" src="/img/perfil02.png" alt="img perfil" width="120"></td> <span class="glyphicon glyphicon-star-empt" aria-hedden="true"></span>
                        </p>
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
                        <p class="mb-0"><span class="glyphicon glyphicon-star-empt" aria-hedden="true"></span>
                            <td><img class="fotoperf mb-0" src="/img/oculos.jpg" alt="img perfil" width="120"></td> <span class="glyphicon glyphicon-star-empt" aria-hedden="true"></span>
                        </p>
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

        <div class="card card-cascade wider">
            <span class="titulo001">
                <h4>Artigos</h4>
            </span>
            <hr>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <a href="{{ route('artigos') }}">
                                <img class="card-img-top" src="../img/gastro.jpg" alt="Card image cap">
                            </a>
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <div class="card-body card-body-cascade text-center">
                            <a href="{{ route('artigos') }}">
                                <h4 class="font-weight-bold card-title">Gastronomia Brasileira.</h4>
                            </a>
                            <p class="card-text">A culinária do Brasil é fruto de uma mistura de ingredientes europeus, indígenas e africanos</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade">
                            <a href="{{ route('artigos') }}">
                                <img class="card-img-top" src="../img/photo6.jpg" alt="Card image cap">
                            </a>
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <div class="card-body card-body-cascade text-center">
                            <a href="{{ route('artigos') }}">
                                <h4 class="card-title"><strong>Arte</strong></h4>
                            </a>
                            <p class="card-text">O homem diante dos diversos setores sociais é influenciado a seguir os caminhos da arte</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <a href="{{ route('artigos') }}">
                                <img class="card-img-top" src="../img/stadium.jpg" alt="Card image cap">
                            </a>
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <div class="card-body card-body-cascade text-center">
                            <a href="{{ route('artigos') }}">
                                <h4 class="card-title"><strong>E-sports</strong></h4>
                            </a>
                            <p class="card-text">O eSports, ou esporte eletrônico, veio para ficar. A modalidade de competição profissional com videogames</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <a href="{{ route('artigos') }}">
                                <img class="card-img-top" src="../img/ferias.jpeg" alt="Card image cap">
                            </a>
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <div class="card-body card-body-cascade text-center">
                            <a href="{{ route('artigos') }}">
                                <h4 class="font-weight-bold card-title">Viagens</h4>
                            </a>
                            <p class="card-text">Preparamos super dicas que vão esclarecer suas dúvidas e facilitar bastante a “difícil” tarefa de viajar pelo mundo!</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <a href="{{ route('artigos') }}">
                                <img class="card-img-top" src="../img/musica.jpg" alt="Card image cap">
                            </a>
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <div class="card-body card-body-cascade text-center">
                            <a href="{{ route('artigos') }}">
                                <h4 class="card-title"><strong>Música</strong></h4>
                            </a>
                            <p class="card-text"> A música é a principal arte em todo o mundo. Desde tribos indígenas, até em grandes cidades, a música é em especial uma forte presença artística
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-cascade wider">
                        <div class="view view-cascade overlay">
                            <a href="{{ route('artigos') }}">
                                <img class="card-img-top" src="../img/cutulra.jpg" alt="Card image cap">
                            </a>
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <div class="card-body card-body-cascade text-center">
                            <a href="{{ route('artigos') }}">
                                <h4 class="card-title"><strong>Cultura Brasileira</strong></h4>
                            </a>
                            <p class="card-text"> A Cultura Brasileira é o resultado da miscigenação de diversos grupos étnicos que participaram da formação da população brasileira </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
@endsection