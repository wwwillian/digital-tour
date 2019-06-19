@extends('layouts.conectado')

@section('content')

<!-- Foto Perfil - Personalizado -->
<div class="container">
<div class="content">
    <div class="col-lg-12 col-md-12 col-xl-12">
        <div class="awesome user width-cover mt-5">
            <div class="container img-fundo" id="btnMostrarEsconder">
                 @if(auth()->user()->cupPhoto != null)
                    <img src="{{ url('storage/usersfundo/'.auth()->user()->cupPhoto) }}" class="imgcapa">
                @else
                    <img src="/img/imagenopaisagem.jpg" class="imgcapa">
                @endif
            </div>
        </div>
                <div class="items-banner"></div>
                <div class="img-perfil">
                    <a href="#">
                        @if(auth()->user()->image != null)
                            <img src="{{ url('storage/users/'.auth()->user()->image) }}" id="btnMostrarEsconder1" alt="img perfil"  width="170" class="btnMostrarEsconder1">
                        @else
                            <img src="/img/user.png" id="btnMostrarEsconder1" alt="img perfil"  width="170" class="btnMostrarEsconder1">
                        @endif
                    </a>
                    <a href="" class="btn btn-primary btn-small btn-alt-foto divConteudo1" data-toggle="modal">Alterar Foto</a>
                <div class="h1capa">
                <h1 class="perfil">{{ auth()->user()->name  }}</h1> </div><div class="btnfundo">
                <a class="btn btn-primary btn-embossed btn-capa divConteudo" data-toggle="modal" href="#">Alterar Capa</a>

                </div>

    </div>
    <!-- Cabecalho de postagem! -->
    <div>
        <div class="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="tab-header card">
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
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tposts" role="tab">Posts</a>
                        <div class="slide"></div>
                    </li>
                </ul>
            </div>


            <div class="tab-content">
                <!--Perfil -->
                <div class="tab-pane active" id="tperfil" role="tabpanel">

                    <div class="card">
                        <div class="card-header textoperfil">
                            <h5 class="card-header-text">Perfil</h5>
                            <button id="edit-btn" type="button"
                                    class="btn btn-primary submit-form"><a href="{{ route('profile') }}">Editar</a></button>
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
                                                                <td>{{ auth()->user()->name  }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Genero</th>
                                                                <td>{{ auth()->user()->gender  }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Aniversario</th>
                                                                <td>{{ auth()->user()->date  }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Status Civil</th>
                                                                <td>{{ auth()->user()->maritalStatus  }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Localizacao</th>
                                                                <td>{{ auth()->user()->location  }}</td>
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
                                                                <td><a href="mailto:{{ auth()->user()->email  }}">{{ auth()->user()->email  }}</a></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Celular</th>
                                                                <td>{{ auth()->user()->mobileNumber  }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Facebook</th>
                                                                <td><a href="{{ auth()->user()->facebook  }}">{{ auth()->user()->facebook  }}</a></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Skype</th>
                                                                <td>{{ auth()->user()->skype  }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Instagram</th>
                                                                <td><a href="{{ auth()->user()->instagram  }}">{{ auth()->user()->instagram  }}</a></td>
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
                            <!-- editar perfil -->
                            <div class="edit-info" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="general-info form-material">
                                            <div class="row">
                                                <div class="col-lg-6 ">
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="icofont icofont-user"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                   required="">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Full Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="fa fa-mars-double"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <div class="form-radio">
                                                                <div class="group-add-on">
                                                                    <div class="radio radiofill radio-inline">
                                                                        <label>
                                                                            <input type="radio" name="radio" checked=""><i
                                                                                class="helper"></i> Male
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio radiofill radio-inline">
                                                                        <label>
                                                                            <input type="radio" name="radio"><i
                                                                                class="helper"></i> Female
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="fa fa-birthday-cake"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                   required="">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Select Your Birth Date</label>
                                                        </div>
                                                    </div>
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="fa fa-heart"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <select id="hello-single" class="form-control">
                                                                <option value="">---- Marital Status ----</option>
                                                                <option value="married">Married</option>
                                                                <option value="unmarried">Unmarried</option>
                                                            </select>
                                                            <span class="form-bar"></span>
                                                        </div>
                                                    </div>
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="icofont icofont-location-pin"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                   required="">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Address</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="icofont icofont-mobile-phone"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                   required="">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Mobile Number</label>
                                                        </div>
                                                    </div>
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="icofont icofont-social-twitter"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                   required="">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Twitter Id</label>
                                                        </div>
                                                    </div>
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="icofont icofont-social-skype"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                   required="">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Skype Id</label>
                                                        </div>
                                                    </div>
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="icofont icofont-earth"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                   required="">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">website</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
{{--                                            <div class="text-center">--}}
{{--                                                <a href="#"--}}
{{--                                                   class="btn btn-primary waves-effect waves-light m-r-20">Salvar</a>--}}
{{--                                                <a href="#" id="edit-cancel"--}}
{{--                                                   class="btn btn-default waves-effect">Cancelar</a>--}}
{{--                                            </div>--}}
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
{{--                                    <button id="edit-info-btn" type="button"--}}
{{--                                            class="btn btn-sm btn-primary waves-effect waves-light f-right">--}}
{{--                                        <i class="icofont icofont-edit"></i>--}}
{{--                                    </button>--}}
                                </div>
                                <div class="card-block user-desc">
                                    <div class="view-desc">
                                        <p class="p-5">{{ auth()->user()->experience  }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- fim caminho de posts -->



                <!--Fotos-->


                <div class="tab-pane" id="tfotos" role="tabpanel">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Galeria</h5>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card b-l-success business-info services m-b-20">
                                        <div class="card-header">

                                            <div class="container">


                                                <div class="container gallery-container">

                                                    <div class="tz-gallery">

                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                <div class="card">
{{--                                                        IMPORTANTE            @if(isset($gallery))--}}


{{--                            IMPORTANTE                                            <img src="{{url('storage/gallerys/'.$gallery->photo1)}}" alt="Park" class="card-img-top">--}}
                                                                        @if(auth()->user()->gallerys[0]->photo2 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[0]->photo1)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[0]->photo1)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif

                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">

                                                                    @if(auth()->user()->gallerys[0]->photo2 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[0]->photo2)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[0]->photo2)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif

                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[0]->photo3 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[0]->photo3)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[0]->photo3)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[0]->photo4 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[0]->photo4)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[0]->photo4)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[0]->photo5 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[0]->photo5)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[0]->photo5)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[0]->photo6 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[0]->photo6)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[0]->photo6)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <!-- <div class="service-header">
                                                <a href="#">
                                                    <img src="assets/img/001.jpg" alt="img 1" class="rounded img-thumbnail">
                                                </a>
                                            </div> -->
                                            <span class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                  role="tooltip">
                                        </span>
                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                    <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#gallery1">
                                                    Editar</a>
                                                <a class="dropdown-item" href="#!">
                                                    Deletar</a>
                                            </div>
                                            <div class="modal fade" id="gallery1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                @if(session('success'))
                                                    <div class="alert alert-success">
                                                        {{ session('success') }}
                                                    </div>
                                                @endif

                                                @if(session('error'))
                                                    <div class="alert alert-danger">
                                                        {{ session('error') }}
                                                    </div>
                                                @endif
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Imagens</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <form method="POST" action="{{ route('gallerysUpdate') }}" enctype="multipart/form-data">
                                                            @csrf
                                                        <div class="modal-body">
                                                            <input type="hidden" id="escondido" name="user_id">
                                                            <input type="hidden" id="escondido" name="post_id">

                                                            <div class="form-group row">
                                                                <label for="photo1" class="col-md-4 col-form-label text-md-right">Imagem 1</label>

                                                                <div class="col-md-6">
                                                                    <input id="photo1" type="file" class="form-control @error('photo1') is-invalid @enderror" name="photo1">


                                                                    @error('photo1')
                                                                    <span class="invalid-feedback" role="alert">
                                                                         <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="photo2" class="col-md-4 col-form-label text-md-right">Imagem 2</label>

                                                                <div class="col-md-6">
                                                                    <input id="photo2" type="file" class="form-control @error('photo2') is-invalid @enderror" name="photo2">


                                                                    @error('photo2')
                                                                    <span class="invalid-feedback" role="alert">
                                                                         <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="photo3" class="col-md-4 col-form-label text-md-right">Imagem 3</label>

                                                                <div class="col-md-6">
                                                                    <input id="photo3" type="file" class="form-control @error('photo3') is-invalid @enderror" name="photo3">


                                                                    @error('photo3')
                                                                    <span class="invalid-feedback" role="alert">
                                                                         <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="photo4" class="col-md-4 col-form-label text-md-right">Imagem 4</label>

                                                                <div class="col-md-6">
                                                                    <input id="photo4" type="file" class="form-control @error('photo4') is-invalid @enderror" name="photo4">


                                                                    @error('photo4')
                                                                    <span class="invalid-feedback" role="alert">
                                                                         <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="photo5" class="col-md-4 col-form-label text-md-right">Imagem 5</label>

                                                                <div class="col-md-6">
                                                                    <input id="photo5" type="file" class="form-control @error('photo5') is-invalid @enderror" name="photo5">


                                                                    @error('photo5')
                                                                    <span class="invalid-feedback" role="alert">
                                                                         <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="photo6" class="col-md-4 col-form-label text-md-right">Imagem 6</label>

                                                                <div class="col-md-6">
                                                                    <input id="photo6" type="file" class="form-control @error('photo6') is-invalid @enderror" name="photo6">


                                                                    @error('photo')
                                                                    <span class="invalid-feedback" role="alert">
                                                                         <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <input id="comments" name="comments" type="text">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                            <button type="submit" class="btn btn-secondary">Enviar</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="task-detail">Paisagem!</p>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card b-l-danger business-info services">
                                        <div class="card-header">
                                            <div class="container">



                                                <div class="container gallery-container">

                                                    <div class="tz-gallery">

                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                <div class="card">

                                                                    @if(auth()->user()->gallerys[1]->photo1 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[1]->photo1)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[1]->photo1)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif

                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">

                                                                    @if(auth()->user()->gallerys[1]->photo2 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[1]->photo2)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[1]->photo2)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif

                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[1]->photo3 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[1]->photo3)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[1]->photo3)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[1]->photo4 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[1]->photo4)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[1]->photo4)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[1]->photo5 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[1]->photo5)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[1]->photo5)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[1]->photo6 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[1]->photo6)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[1]->photo6)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <!--
                                                                                    <div class="service-header">
                                                                                        <a href="#">
                                                                                            <img src="assets/img/002.jpg" alt="img 2" class="rounded img-thumbnail">
                                                                                        </a>
                                                                                    </div> -->
                                            <span class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                  role="tooltip">
                                        </span>
                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>
                                                    Editar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>
                                                    Deletar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>
                                                    Ampliar</a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="task-detail">Viagem Brasilia</p>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card b-l-info business-info services">
                                        <div class="card-header">
                                            <div class="container">



                                                <div class="container gallery-container">

                                                    <div class="tz-gallery">

                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                <div class="card">


                                                                    @if(auth()->user()->gallerys[2]->photo2 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[2]->photo1)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[2]->photo1)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif

                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">

                                                                    @if(auth()->user()->gallerys[2]->photo2 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[2]->photo2)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[2]->photo2)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif

                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[2]->photo3 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[2]->photo3)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[2]->photo3)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[2]->photo4 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[2]->photo4)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[2]->photo4)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[2]->photo5 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[2]->photo5)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[2]->photo5)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[2]->photo6 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[2]->photo6)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[2]->photo6)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>


                                            <!-- <div class="service-header">
                                                <a href="#">
                                                    <img src="assets/img/003.jpg" alt="img 3" class="rounded img-thumbnail">
                                                </a>
                                            </div> -->
                                            <span class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                  role="tooltip">
                                        </span>
                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>
                                                    Editar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>
                                                    Deletar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>
                                                    Ampliar</a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="task-detail">Viagem França</p>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card b-l-warning business-info services">
                                        <div class="card-header">
                                            <div class="container">



                                                <div class="container gallery-container">

                                                    <div class="tz-gallery">

                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[3]->photo1 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[3]->photo1)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[3]->photo1)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif

                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">

                                                                    @if(auth()->user()->gallerys[3]->photo2 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[3]->photo2)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[3]->photo2)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif

                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[3]->photo3 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[3]->photo3)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[3]->photo3)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[3]->photo4 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[3]->photo4)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[3]->photo4)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[3]->photo5 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[3]->photo5)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[3]->photo5)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[3]->photo6 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[3]->photo6)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[3]->photo6)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <span class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                  role="tooltip">
                                        </span>
                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>
                                                    Editar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>
                                                    Deletar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>
                                                    Ampliar</a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="task-detail">Índia</p>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card b-l-danger business-info services">
                                        <div class="card-header">
                                            <div class="container">



                                                <div class="container gallery-container">

                                                    <div class="tz-gallery">

                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[4]->photo1 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[4]->photo1)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[4]->photo1)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif

                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">

                                                                    @if(auth()->user()->gallerys[4]->photo2 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[4]->photo2)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[4]->photo2)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif

                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[4]->photo3 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[4]->photo3)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[4]->photo3)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[4]->photo4 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[4]->photo4)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[4]->photo4)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[4]->photo5 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[4]->photo5)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[4]->photo5)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[4]->photo6 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[4]->photo6)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[4]->photo6)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <span class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                  role="tooltip">
                                        </span>
                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>
                                                    Editar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>
                                                    Deletar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>
                                                    Ampliar</a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="task-detail">São Paulo</p>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card b-l-success business-info services">
                                        <div class="card-header">
                                            <div class="container">



                                                <div class="container gallery-container">

                                                    <div class="tz-gallery">

                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[5]->photo1 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[5]->photo1)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[5]->photo1)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif

                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">

                                                                    @if(auth()->user()->gallerys[5]->photo2 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[5]->photo2)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[5]->photo2)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif

                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[5]->photo3 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[5]->photo3)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[5]->photo3)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[5]->photo4 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[5]->photo4)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[5]->photo4)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[5]->photo5 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[5]->photo5)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[5]->photo5)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    @if(auth()->user()->gallerys[5]->photo6 != null)
                                                                        <a class="lightbox" href="{{url('storage/gallerys/'.auth()->user()->gallerys[5]->photo6)}}">
                                                                            <img src="{{url('storage/gallerys/'.auth()->user()->gallerys[5]->photo6)}}" alt="Park" class="card-img-top"></a>
                                                                    @else
                                                                        <a class="lightbox" href="{{url('img/imagenopaisagem.jpg')}}">
                                                                            <img src="/img/imagenopaisagem.jpg" alt="Park" class="card-img-top"></a>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <span class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                  role="tooltip">
                                        </span>
                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                <a class="dropdown-item" href="#!">
                                                    Editar</a>
                                                <a class="dropdown-item" href="#!">
                                                    Deletar</a>
                                                <a class="dropdown-item" href="#!">
                                                    Ampliar</a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="task-detail">Rio de Janeiro</p>
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
                                    <h5 class="card-header-text">Adicionar mais fotos</h5>
                                </div>
                                <div class="card-block">
                                    <div id="main"
                                         style="height: 300px; width: 100%; -moz-user-select: none; background-color: rgba(0, 0, 0, 0);"
                                         _echarts_instance_="1554821896534">
                                        <div style="position: relative; overflow: hidden; width: 100px; height: 300px;">
                                            <div style="position: absolute; left: 0px; top: 0px; width: 100px; height: 300px; -moz-user-select: none;"
                                                 data-zr-dom-id="bg" class="zr-element"></div><canvas
                                                style="position: absolute; left: 0px; top: 0px; width: 100px; height: 300px; -moz-user-select: none;"
                                                width="100" height="300" data-zr-dom-id="0"
                                                class="zr-element"></canvas><canvas
                                                style="position: absolute; left: 0px; top: 0px; width: 100px; height: 300px; -moz-user-select: none;"
                                                width="100" height="300" data-zr-dom-id="1"
                                                class="zr-element"></canvas><canvas
                                                style="position: absolute; left: 0px; top: 0px; width: 100px; height: 300px; -moz-user-select: none;"
                                                width="100" height="300" data-zr-dom-id="_zrender_hover_"
                                                class="zr-element"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--fim das fotos-->

                <!--Amigos-->
                <div class="tab-pane" id="tamigos" role="tabpanel">
                    <div class="conteiner">

                        <!-- <div class="row"> -->
                        <!-- <div class="tab-pane active show" id="tvideos" role="tabpanel"> -->
                        <div class="card">
                            <div class="card-header">
                                <div class="row d-flex justify-content-between mr-5 ml-5 mt-2">
                                    <h5 class="card-header-text">Amigos</h5>
{{--                                <form class="navbar-form col-lg-9 d-flex flex-row justify-content-between" >--}}
                                        <button type="submit" class="btn btn-defaulf submit-form" data-toggle="modal" data-target="#exampleModalCenter">Pesquisar</button>
{{--                                </form>--}}
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title col-lg-3" id="exampleModalLongTitle">Amigos</h5>
                                                    <form class="navbar-form d-flex flex-row justify-content-between" >
                                                        <input type="text" cl{ass="form-control col-lg-6" plar="Digite a pesquise seus amigos">
                                                        <button type="submit" class="btn btn-defaulf col-lg-ceholde3 submit-form" data-toggle="modal" data-target="#exampleModalCenter">Pesquisar</button>
                                                    </form>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    @if(isset($amigos))
                                                    @foreach($amigos as $amigo)
                                                    <div class="chip chip-lg mt-3 pr-4">
                                                        @if($amigo->image != null)
                                                            <img src="{{ url('storage/users/'.$amigo->image) }}" class="imgcapa">
                                                        @else
                                                            <img src="/img/imagenopaisagem.jpg" class="imgcapa">
                                                        @endif
                                                        {{$amigo->name}}
                                                        <button type="submit" class="btn btn-secondary submit-form ">Adicionar</button>
                                                    </div>
                                                    @endforeach
                                                    @endif
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary submit-form" data-dismiss="modal">Close</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

                <!-- Posts -->

                <div class="tab-pane" id="tposts" role="tabpanel">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text mt-2">Publique seu Posts</h5>
                            <form method="POST" action="{{ route('postsUpdate') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" id="escondido" name="user_id">
                                <textarea class="form-control" name="description" id="description" type="description"></textarea>

                                <div class="form-group mt-3 row">
                                    <label for="photo" class="col-md-2 col-form-label text-md-right">Publique sua foto:</label>

                                    <div class="col-md-10">
                                        <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" autocomplete="current-image">

                                        @error('photo')
                                        <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="submit-form">
                                            Publicar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-block">
                            <div class="view-info">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="general-info">
                                            <div class="row">
                                                <div class="col-lg-12 col-xl-6">
                                                    ...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim de Posts -->
            </div>
            <!-- Fim de Posts -->
        </div>
        <!-- fim da col-lg-12 -->
    </div>
    <!-- fim da row -->



    <!--Postagens-->
    <section class="my-5 postagem-display">


    <!-- Reply section (logged in user) -->
    <!--Section: Comments-->
{{--    <section class="my-5 postagem-display">--}}

        <!-- Card header -->

        <div class="esc">
        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
        quia non numquam eius modi
        tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
        </div>




    </section>
    <!--Fim das postagens-->

</div>
</div>
</div>
<!--fim conteiner-->


@endsection
