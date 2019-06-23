@extends('layouts.conectado')

@section('content')

    <!-- Foto Perfil - Personalizado -->
    <div class="container">
        <div class="">
            <div class="col-lg-12 col-md-12 col-xl-12">
                <div class="awesome user width-cover mt-5">
                    <div class="container img-fundo" id="btnMostrarEsconder">
                        @if($amigo->cupPhoto != null)
                            <img src="{{ url('storage/usersfundo/'.$amigo->cupPhoto) }}" class="imgcapa">
                        @else
                            <img src="/img/imagenopaisagem.jpg" class="imgcapa">
                        @endif
                    </div>
                </div>
                <div class="items-banner"></div>
                <div class="img-perfil">
                    <a href="#">
                        @if($amigo->image != null)
                            <img src="{{ url('storage/users/'.$amigo->image) }}" id="btnMostrarEsconder1" alt="img perfil"  width="170" class="btnMostrarEsconder1">
                        @else
                            <img src="/img/user.png" id="btnMostrarEsconder1" alt="img perfil"  width="170" class="btnMostrarEsconder1">
                        @endif
                    </a>
                    <div class="h1capa">
                        <h1 class="perfil">{{ $amigo->name }}</h1> 
                    </div>
                </div>
                <!-- Cabecalho de postagem! -->
                <div>
                <form method="POST" action="{{ route('adicionarAmigo') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="escondido" name="user_id" value="{{$amigo->id}}">
                    <button type="submit" class="submit-form">
                        Adicionar
                    </button>
                </form>
                </div>
                <div>
                    <div class="">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="true" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="nav md-pills nav-justified pills-peach-gradient d-flex justify-content-end">
                <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tperfil" role="tab">Perfil</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tamigos" role="tab">Amigos</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tfotos" role="tab">Galeria</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tvideos" role="tab">Videos</a>
                                    <div class="slide"></div>
                                </li>
                            </ul>
                        </div>
                        <!--Perfil -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tperfil" role="tabpanel">
                                <div class="card">
                                    <div class="card-header textoperfil">
                                        <h5 class="card-header-text"></h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="view-info">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="general-info">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-xl-6">
                                                                <div class="table-responsive">
                                                                    <table class="table m-0">
                                                                        <tbody>
                                                                        <tr>
                                                                            <th scope="row">Nome Completo</th>
                                                                            <td>{{ $amigo->name }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Genero</th>
                                                                            <td>{{ $amigo->gender }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Aniversario</th>
                                                                            <td>{{ $amigo->date }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Status Civil</th>
                                                                            <td>{{ $amigo->maritalStatus }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Localizacao</th>
                                                                            <td>{{ $amigo->location }}</td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-xl-6">
                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <tbody>
                                                                        <tr>
                                                                            <th scope="row">E-Mail</th>
                                                                            <td><a href="mailto:{{ $amigo->email }}">{{ $amigo->email }}</a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Celular</th>
                                                                            <td>{{ $amigo->mobileNumber  }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Facebook</th>
                                                                            <td><a href="{{ $amigo->facebook  }}">{{ $amigo->facebook }}</a></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Skype</th>
                                                                            <td>{{ $amigo->skype  }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Instagram</th>
                                                                            <td><a href="{{ $amigo->instagram }}">{{ $amigo->instagram }}</a></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-header-text textoexperiencias">Compartilhe suas experiencias</h5>
                                           </div>
                                            <div class="card-block user-desc">
                                                <div class="view-desc">
                                                    <p class="p-5">{{ $amigo->experience }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- fim caminho de posts -->



                            <!--Fotos-->

                            

                            <!--Amigos-->
                            <div class="tab-pane" id="tamigos" role="tabpanel">
                                <div class="conteiner">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row d-flex justify-content-between mr-5 ml-5 mt-2">
                                                <h5 class="card-header-text">Amigos</h5>
                                            </div>
                                        </div>
                                        <div class="card-block margin-rigth">
                                            <ul class="media-list">
                                                <li class="media">
                                                    <div class="media-left">
                                                        <a href="#">

                                                        </a>
                                                    </div>


                                                    <div class="amigos-css">
                                                        <!-- Grid row -->
                                                        <div class="row">

                                                            <!-- Grid column -->
                                                            <div class="col-lg-4 col-md-12 mb-4">
                                                                <div class="card card-personal mb-md-0 mb-4">

                                                                    <!-- mdbCard image-->
                                                                    <div class="view overlay">
                                                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(28).jpg" alt="mdbCard image cap">
                                                                        <a href="#!">
                                                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                                        </a>
                                                                    </div>
                                                                    <!-- mdbCard image-->

                                                                    <!-- mdbCard content -->
                                                                    <div class="card-body">

                                                                        <!-- Title-->
                                                                        <a>
                                                                            <h4 class="card-title">Sara</h4>
                                                                        </a>
                                                                        <a class="card-meta">Coworker</a>
                                                                        <!-- Text -->
                                                                        <p class="card-text">Sara is a video maker living in Tokyo.</p>
                                                                        <hr>
                                                                        <a class="card-meta"><span><i class="fa fa-user"></i>127 Friends</span></a>
                                                                        <p class="card-meta float-right">Joined in 2014</p>

                                                                    </div>
                                                                    <!-- mdbCard content -->

                                                                </div>
                                                            </div>
                                                            <!-- Grid column -->

                                                            <!-- Grid column -->
                                                            <div class="col-lg-4 col-md-6 mb-4">
                                                                <div class="card card-personal mb-md-0 mb-4">

                                                                    <!-- mdbCard image-->
                                                                    <div class="view overlay">
                                                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" alt="mdbCard image cap">
                                                                        <a href="#!">
                                                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                                        </a>
                                                                    </div>
                                                                    <!-- mdbCard image-->

                                                                    <!-- mdbCard content -->
                                                                    <div class="card-body">

                                                                        <!-- Title-->
                                                                        <a>
                                                                            <h4 class="card-title">John</h4>
                                                                        </a>
                                                                        <a class="card-meta">Coworker</a>
                                                                        <!-- Text -->
                                                                        <p class="card-text">John is a copywriter living in Seattle.</p>
                                                                        <hr>
                                                                        <a class="card-meta"><span><i class="fa fa-user"></i>48 Friends</span></a>
                                                                        <p class="card-meta float-right">Joined in 2015</p>

                                                                    </div>
                                                                    <!-- mdbCard content -->

                                                                </div>
                                                            </div>
                                                            <!-- Grid column -->

                                                            <!-- Grid column -->
                                                            <div class="col-lg-4 col-md-6 mb-4">
                                                                <div class="card card-personal mb-md-0 mb-4">

                                                                    <!-- mdbCard image-->
                                                                    <div class="view overlay">
                                                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg" alt="mdbCard image cap">
                                                                        <a href="#!">
                                                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                                        </a>
                                                                    </div>
                                                                    <!-- mdbCard image-->

                                                                    <!-- mdbCard content -->
                                                                    <div class="card-body">

                                                                        <!-- Title-->
                                                                        <a>
                                                                            <h4 class="card-title">Anna</h4>
                                                                        </a>
                                                                        <a class="card-meta">Friends</a>
                                                                        <!-- Text -->
                                                                        <p class="card-text">Anna is a web designer living in US.</p>
                                                                        <hr>
                                                                        <a class="card-meta"><span><i class="fa fa-user"></i>83 Friends</span></a>
                                                                        <p class="card-meta float-right">Joined in 2012</p>

                                                                    </div>
                                                                    <!-- mdbCard content -->

                                                                </div>
                                                            </div>
                                                            <!-- Grid column -->

                                                        </div>
                                                        <!-- Grid row -->
                                                        <!-- Grid row -->
                                                        <div class="row">

                                                            <!-- Grid column -->
                                                            <div class="col-lg-4 col-md-12 mb-4">
                                                                <div class="card card-personal mb-md-0 mb-4">

                                                                    <!-- mdbCard image-->
                                                                    <div class="view overlay">
                                                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(28).jpg" alt="mdbCard image cap">
                                                                        <a href="#!">
                                                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                                        </a>
                                                                    </div>
                                                                    <!-- mdbCard image-->

                                                                    <!-- mdbCard content -->
                                                                    <div class="card-body">

                                                                        <!-- Title-->
                                                                        <a>
                                                                            <h4 class="card-title">Sara</h4>
                                                                        </a>
                                                                        <a class="card-meta">Coworker</a>
                                                                        <!-- Text -->
                                                                        <p class="card-text">Sara is a video maker living in Tokyo.</p>
                                                                        <hr>
                                                                        <a class="card-meta"><span><i class="fa fa-user"></i>127 Friends</span></a>
                                                                        <p class="card-meta float-right">Joined in 2014</p>

                                                                    </div>
                                                                    <!-- mdbCard content -->

                                                                </div>
                                                            </div>
                                                            <!-- Grid column -->

                                                            <!-- Grid column -->
                                                            <div class="col-lg-4 col-md-6 mb-4">
                                                                <div class="card card-personal mb-md-0 mb-4">

                                                                    <!-- mdbCard image-->
                                                                    <div class="view overlay">
                                                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" alt="mdbCard image cap">
                                                                        <a href="#!">
                                                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                                        </a>
                                                                    </div>
                                                                    <!-- mdbCard image-->

                                                                    <!-- mdbCard content -->
                                                                    <div class="card-body">

                                                                        <!-- Title-->
                                                                        <a>
                                                                            <h4 class="card-title">John</h4>
                                                                        </a>
                                                                        <a class="card-meta">Coworker</a>
                                                                        <!-- Text -->
                                                                        <p class="card-text">John is a copywriter living in Seattle.</p>
                                                                        <hr>
                                                                        <a class="card-meta"><span><i class="fa fa-user"></i>48 Friends</span></a>
                                                                        <p class="card-meta float-right">Joined in 2015</p>

                                                                    </div>
                                                                    <!-- mdbCard content -->

                                                                </div>
                                                            </div>
                                                            <!-- Grid column -->

                                                            <!-- Grid column -->
                                                            <div class="col-lg-4 col-md-6 mb-4">
                                                                <div class="card card-personal mb-md-0 mb-4">

                                                                    <!-- mdbCard image-->
                                                                    <div class="view overlay">
                                                                        <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg" alt="mdbCard image cap">
                                                                        <a href="#!">
                                                                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                                        </a>
                                                                    </div>
                                                                    <!-- mdbCard image-->

                                                                    <!-- mdbCard content -->
                                                                    <div class="card-body">

                                                                        <!-- Title-->
                                                                        <a>
                                                                            <h4 class="card-title">Anna</h4>
                                                                        </a>
                                                                        <a class="card-meta">Friends</a>
                                                                        <!-- Text -->
                                                                        <p class="card-text">Anna is a web designer living in US.</p>
                                                                        <hr>
                                                                        <a class="card-meta"><span><i class="fa fa-user"></i>83 Friends</span></a>
                                                                        <p class="card-meta float-right">Joined in 2012</p>

                                                                    </div>
                                                                    <!-- mdbCard content -->

                                                                </div>
                                                            </div>
                                                            <!-- Grid column -->

                                                        </div>
                                                        <!-- Grid row -->
                                                        <nav class="d-flex justify-content-center mt-5 display-posts">
                                                            <ul class="pagination pagination-circle pg-teal mb-0">

                                                                <!--First-->
                                                                <li class="page-item disabled">
                                                                    <a class="page-link">First</a>
                                                                </li>

                                                                <!--Arrow left-->
                                                                <li class="page-item disabled">
                                                                    <a class="page-link" aria-label="Previous">
                                                                        <span aria-hidden="true">«</span>
                                                                        <span class="sr-only">Previous</span>
                                                                    </a>
                                                                </li>

                                                                <!--Numbers-->
                                                                <li class="page-item active">
                                                                    <a class="page-link">1</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link">2</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link">3</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link">4</a>
                                                                </li>
                                                                <li class="page-item">
                                                                    <a class="page-link">5</a>
                                                                </li>

                                                                <!--Arrow right-->
                                                                <li class="page-item">
                                                                    <a class="page-link" aria-label="Next">
                                                                        <span aria-hidden="true">»</span>
                                                                        <span class="sr-only">Next</span>
                                                                    </a>
                                                                </li>

                                                                <!--Last-->
                                                                <li class="page-item">
                                                                    <a class="page-link">Last</a>
                                                                </li>

                                                            </ul>
                                                        </nav>
                                                    </div>

                                                </li></ul></div>
                                        <!-- </div> -->
                                    </div>


                                    <!-- </div> -->

                                </div>

                            </div>
                            <!--fim Amigos-->

                            <!-- videos -->
                            <div class="tab-pane" id="tvideos" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-header-text">Videos</h5>
                                    </div>
                                    <div class="card-block">
                                        <ul class="media-list">
                                            <li class="media">
                                                <div class="media-left">
                                                    <a href="#">

                                                    </a>
                                                </div>


                                                <div class="videos-css">
                                                    <!-- Grid row -->
                                                    <div class="row">

                                                        <!-- Grid column -->
                                                        <div class="col-lg-4 col-md-12 mb-4">

                                                            <!--Modal: Name-->
                                                            <div class="modal fade" id="modal1" tabindex="-1" role="dialog"
                                                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">

                                                                    <!--Content-->
                                                                    <div class="modal-content">

                                                                        <!--Body-->
                                                                        <div class="modal-body mb-0 p-0">

                                                                            <div
                                                                                class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                                                <iframe class="embed-responsive-item"
                                                                                        src="https://www.youtube.com/embed/A3PDXmYoF5U"
                                                                                        allowfullscreen></iframe>
                                                                            </div>

                                                                        </div>

                                                                        <!--Footer-->
                                                                        <div class="modal-footer justify-content-center">
                                                                            <span class="mr-4">Spread the word!</span>
                                                                            <a type="button" class="btn-floating btn-sm btn-fb"><i
                                                                                    class="fab fa-facebook-f"></i></a>
                                                                            <!--Twitter-->
                                                                            <a type="button" class="btn-floating btn-sm btn-tw"><i
                                                                                    class="fab fa-twitter"></i></a>
                                                                            <!--Google +-->
                                                                            <a type="button" class="btn-floating btn-sm btn-gplus"><i
                                                                                    class="fab fa-google-plus-g"></i></a>
                                                                            <!--Linkedin-->
                                                                            <a type="button" class="btn-floating btn-sm btn-ins"><i
                                                                                    class="fab fa-linkedin-in"></i></a>

                                                                            <button type="button"
                                                                                    class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                                                                    data-dismiss="modal">Close</button>

                                                                        </div>

                                                                    </div>
                                                                    <!--/.Content-->

                                                                </div>
                                                            </div>
                                                            <!--Modal: Name-->

                                                            <a><img class="img-fluid z-depth-1"
                                                                    src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg"
                                                                    alt="video" data-toggle="modal" data-target="#modal1"></a>

                                                        </div>
                                                        <!-- Grid column -->

                                                        <!-- Grid column -->
                                                        <div class="col-lg-4 col-md-6 mb-4">

                                                            <!--Modal: Name-->
                                                            <div class="modal fade" id="modal6" tabindex="-1" role="dialog"
                                                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">

                                                                    <!--Content-->
                                                                    <div class="modal-content">

                                                                        <!--Body-->
                                                                        <div class="modal-body mb-0 p-0">

                                                                            <div
                                                                                class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                                                <iframe class="embed-responsive-item"
                                                                                        src="https://www.youtube.com/embed/wTcNtgA6gHs"
                                                                                        allowfullscreen></iframe>
                                                                            </div>

                                                                        </div>

                                                                        <!--Footer-->
                                                                        <div class="modal-footer justify-content-center">
                                                                            <span class="mr-4">Spread the word!</span>
                                                                            <a type="button" class="btn-floating btn-sm btn-fb"><i
                                                                                    class="fab fa-facebook-f"></i></a>
                                                                            <!--Twitter-->
                                                                            <a type="button" class="btn-floating btn-sm btn-tw"><i
                                                                                    class="fab fa-twitter"></i></a>
                                                                            <!--Google +-->
                                                                            <a type="button" class="btn-floating btn-sm btn-gplus"><i
                                                                                    class="fab fa-google-plus-g"></i></a>
                                                                            <!--Linkedin-->
                                                                            <a type="button" class="btn-floating btn-sm btn-ins"><i
                                                                                    class="fab fa-linkedin-in"></i></a>

                                                                            <button type="button"
                                                                                    class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                                                                    data-dismiss="modal">Close</button>

                                                                        </div>

                                                                    </div>
                                                                    <!--/.Content-->

                                                                </div>
                                                            </div>
                                                            <!--Modal: Name-->

                                                            <a><img class="img-fluid z-depth-1"
                                                                    src="https://mdbootstrap.com/img/screens/yt/screen-video-2.jpg"
                                                                    alt="video" data-toggle="modal" data-target="#modal6"></a>

                                                        </div>
                                                        <!-- Grid column -->

                                                        <!-- Grid column -->
                                                        <div class="col-lg-4 col-md-6 mb-4">

                                                            <!--Modal: Name-->
                                                            <div class="modal fade" id="modal4" tabindex="-1" role="dialog"
                                                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">

                                                                    <!--Content-->
                                                                    <div class="modal-content">

                                                                        <!--Body-->
                                                                        <div class="modal-body mb-0 p-0">

                                                                            <div
                                                                                class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                                                <iframe class="embed-responsive-item"
                                                                                        src="https://www.youtube.com/embed/vlDzYIIOYmM"
                                                                                        allowfullscreen></iframe>
                                                                            </div>

                                                                        </div>

                                                                        <!--Footer-->
                                                                        <div class="modal-footer justify-content-center">
                                                                            <span class="mr-4">Spread the word!</span>
                                                                            <a type="button" class="btn-floating btn-sm btn-fb"><i
                                                                                    class="fab fa-facebook-f"></i></a>
                                                                            <!--Twitter-->
                                                                            <a type="button" class="btn-floating btn-sm btn-tw"><i
                                                                                    class="fab fa-twitter"></i></a>
                                                                            <!--Google +-->
                                                                            <a type="button" class="btn-floating btn-sm btn-gplus"><i
                                                                                    class="fab fa-google-plus-g"></i></a>
                                                                            <!--Linkedin-->
                                                                            <a type="button" class="btn-floating btn-sm btn-ins"><i
                                                                                    class="fab fa-linkedin-in"></i></a>

                                                                            <button type="button"
                                                                                    class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                                                                    data-dismiss="modal">Close</button>

                                                                        </div>

                                                                    </div>
                                                                    <!--/.Content-->

                                                                </div>
                                                            </div>
                                                            <!--Modal: Name-->

                                                            <a><img class="img-fluid z-depth-1"
                                                                    src="https://mdbootstrap.com/img/screens/yt/screen-video-3.jpg"
                                                                    alt="video" data-toggle="modal" data-target="#modal4"></a>

                                                        </div>
                                                        <!-- Grid column -->

                                                    </div>
                                                    <!-- Grid row -->
                                                    <!-- Grid row -->
                                                    <div class="row">

                                                        <!-- Grid column -->
                                                        <div class="col-lg-4 col-md-12">

                                                            <!--Modal: Name-->
                                                            <div class="modal fade" id="modal1" tabindex="-1" role="dialog"
                                                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">

                                                                    <!--Content-->
                                                                    <div class="modal-content">

                                                                        <!--Body-->
                                                                        <div class="modal-body mb-0 p-0">

                                                                            <div
                                                                                class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                                                <iframe class="embed-responsive-item"
                                                                                        src="https://www.youtube.com/embed/A3PDXmYoF5U"
                                                                                        allowfullscreen></iframe>
                                                                            </div>

                                                                        </div>

                                                                        <!--Footer-->
                                                                        <div class="modal-footer justify-content-center">
                                                                            <span class="mr-4">Spread the word!</span>
                                                                            <a type="button" class="btn-floating btn-sm btn-fb"><i
                                                                                    class="fab fa-facebook-f"></i></a>
                                                                            <!--Twitter-->
                                                                            <a type="button" class="btn-floating btn-sm btn-tw"><i
                                                                                    class="fab fa-twitter"></i></a>
                                                                            <!--Google +-->
                                                                            <a type="button" class="btn-floating btn-sm btn-gplus"><i
                                                                                    class="fab fa-google-plus-g"></i></a>
                                                                            <!--Linkedin-->
                                                                            <a type="button" class="btn-floating btn-sm btn-ins"><i
                                                                                    class="fab fa-linkedin-in"></i></a>

                                                                            <button type="button"
                                                                                    class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                                                                    data-dismiss="modal">Close</button>

                                                                        </div>

                                                                    </div>
                                                                    <!--/.Content-->

                                                                </div>
                                                            </div>
                                                            <!--Modal: Name-->

                                                            <a><img class="img-fluid z-depth-1"
                                                                    src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg"
                                                                    alt="video" data-toggle="modal" data-target="#modal1"></a>

                                                        </div>
                                                        <!-- Grid column -->

                                                        <!-- Grid column -->
                                                        <div class="col-lg-4 col-md-6">

                                                            <!--Modal: Name-->
                                                            <div class="modal fade" id="modal6" tabindex="-1" role="dialog"
                                                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">

                                                                    <!--Content-->
                                                                    <div class="modal-content">

                                                                        <!--Body-->
                                                                        <div class="modal-body mb-0 p-0">

                                                                            <div
                                                                                class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                                                <iframe class="embed-responsive-item"
                                                                                        src="https://www.youtube.com/embed/wTcNtgA6gHs"
                                                                                        allowfullscreen></iframe>
                                                                            </div>

                                                                        </div>

                                                                        <!--Footer-->
                                                                        <div class="modal-footer justify-content-center">
                                                                            <span class="mr-4">Spread the word!</span>
                                                                            <a type="button" class="btn-floating btn-sm btn-fb"><i
                                                                                    class="fab fa-facebook-f"></i></a>
                                                                            <!--Twitter-->
                                                                            <a type="button" class="btn-floating btn-sm btn-tw"><i
                                                                                    class="fab fa-twitter"></i></a>
                                                                            <!--Google +-->
                                                                            <a type="button" class="btn-floating btn-sm btn-gplus"><i
                                                                                    class="fab fa-google-plus-g"></i></a>
                                                                            <!--Linkedin-->
                                                                            <a type="button" class="btn-floating btn-sm btn-ins"><i
                                                                                    class="fab fa-linkedin-in"></i></a>

                                                                            <button type="button"
                                                                                    class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                                                                    data-dismiss="modal">Close</button>

                                                                        </div>

                                                                    </div>
                                                                    <!--/.Content-->

                                                                </div>
                                                            </div>
                                                            <!--Modal: Name-->

                                                            <a><img class="img-fluid z-depth-1"
                                                                    src="https://mdbootstrap.com/img/screens/yt/screen-video-2.jpg"
                                                                    alt="video" data-toggle="modal" data-target="#modal6"></a>

                                                        </div>
                                                        <!-- Grid column -->

                                                        <!-- Grid column -->
                                                        <div class="col-lg-4 col-md-6">

                                                            <!--Modal: Name-->
                                                            <div class="modal fade" id="modal4" tabindex="-1" role="dialog"
                                                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">

                                                                    <!--Content-->
                                                                    <div class="modal-content">

                                                                        <!--Body-->
                                                                        <div class="modal-body mb-0 p-0">

                                                                            <div
                                                                                class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                                                <iframe class="embed-responsive-item"
                                                                                        src="https://www.youtube.com/embed/vlDzYIIOYmM"
                                                                                        allowfullscreen></iframe>
                                                                            </div>

                                                                        </div>

                                                                        <!--Footer-->
                                                                        <div class="modal-footer justify-content-center">
                                                                            <span class="mr-4">Spread the word!</span>
                                                                            <a type="button" class="btn-floating btn-sm btn-fb"><i
                                                                                    class="fab fa-facebook-f"></i></a>
                                                                            <!--Twitter-->
                                                                            <a type="button" class="btn-floating btn-sm btn-tw"><i
                                                                                    class="fab fa-twitter"></i></a>
                                                                            <!--Google +-->
                                                                            <a type="button" class="btn-floating btn-sm btn-gplus"><i
                                                                                    class="fab fa-google-plus-g"></i></a>
                                                                            <!--Linkedin-->
                                                                            <a type="button" class="btn-floating btn-sm btn-ins"><i
                                                                                    class="fab fa-linkedin-in"></i></a>

                                                                            <button type="button"
                                                                                    class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                                                                    data-dismiss="modal">Close</button>

                                                                        </div>

                                                                    </div>
                                                                    <!--/.Content-->

                                                                </div>
                                                            </div>
                                                            <!--Modal: Name-->

                                                            <a><img class="img-fluid z-depth-1"
                                                                    src="https://mdbootstrap.com/img/screens/yt/screen-video-3.jpg"
                                                                    alt="video" data-toggle="modal" data-target="#modal4"></a>

                                                        </div>
                                                        <!-- Grid column -->
                                                        <span class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                              role="tooltip">
                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                            <a class="dropdown-item" href="#!">
                                                                Adicionar</a>
                                                            <a class="dropdown-item" href="#!">
                                                                Editar</a>
                                                            <a class="dropdown-item" href="#!">
                                                                Excluir</a>
                                                        </div>
                                                    </div>
                                                    <!-- Grid row -->
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- fim  videos -->

                        </div>
                        <!-- Fim de Posts -->
                    </div>
                    <!-- fim da col-lg-12 -->
                </div>
                <!-- fim da row -->





                </section>
                <!--Fim das postagens-->

            </div>
        </div>
    </div>
    <!--fim conteiner-->


@endsection



