@extends('layouts.conectado')

@section('content')


<div class="container">
<div class="">
    <div class="col-lg-12 col-md-12 col-xl-12">
        <div class="awesome user width-cover mt-5">
            @if(auth()->user()->cupphoto != null)
                <div class="container img-fundo" id="btnMostrarEsconder" style="background-image: url({{ url('storage/usersfundo/'.auth()->user()->cupphoto) }})">
                </div>
            @else
                <div class="container img-fundo" id="btnMostrarEsconder" style="background-image: url(/img/imagenopaisagem.jpg)">
                </div>
            @endif
        </div>
                <div class="items-banner"></div>
                <div class="img-perfil">
                    <a href="#">
                        @if(auth()->user()->image != null)
                            <img src="{{ url('storage/users/'.auth()->user()->image) }}" id="btnMostrarEsconder1" alt="img perfil"  width="170" class="btnMostrarEsconder1">
                        @else
                            <img src="/img/user.jpg" id="btnMostrarEsconder1" alt="img perfil"  width="170" class="btnMostrarEsconder1">
                        @endif
                    </a>
                <div class="h1capa">
                <h1 class="perfil">{{ auth()->user()->name }}</h1> </div><div class="btnfundo">
              </div>
    </div>
    <div>
        <div class="">
        @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('erro'))
                     <div class="alert alert-danger">
                         {{ session('erro') }}
                     </div>
                @endif

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
                                                                <td>{{ auth()->user()->maritalstatus  }}</td>
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
                                                                <td>{{ auth()->user()->mobilenumber  }}</td>
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
                                        <p class="p-5">{{ auth()->user()->experience }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- fim caminho de posts -->



                <!--Fotos-->
                <div class="tab-pane" id="tfotos" role="tabpanel">
                    <div class="card card-gallery">
                        <div class="card-header">
                            <h5 class="card-header-text">Galeria</h5>
                        </div>
                      
                        <div class="conteudofotos  tz-gallery pt-5 pb-5 pl-5 pr-3 gallerydiv">
                            @foreach($posts as $key => $value)
                            
                            @if($value->photo != null)

        
                            <a class="lightbox mr-4 mb-4" href="{{url('storage/posts/'.$value->photo)}}">
                                <img src="{{url('storage/posts/'.$value->photo)}}" alt="Park" class="mr-4 mb-4">
                            </a>
                            
                            @endif
                            
                            @endforeach

                        </div>                    
                    </div>
                </div>

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
                                        <div class="amigos-css p-5">
                                            <!-- Grid row -->
                                            <div class="row">
                                                @if($friends)
                                                @foreach($friends as $friend)
                                                
                                                <div class="col-lg-4 col-md-6 mb-4">
                                                    <div class="card card-personal mb-md-0 mb-4">

                                                        <!-- mdbCard image-->
                                                        <div class="view overlay">
                                                        @if($friend->image != null)
                                                            <img class="card-img-top" src="{{ url('storage/users/'.$friend->image) }}" alt="mdbCard image cap" height= "300px">
                                                             <a href="#!">
                                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                            </a>
                                                            @else
                                                             <img src="/img/user.jpg" class="card-img-top" height= "300px">
                                                             @endif
                                                        </div>
                                                        <!-- mdbCard image-->

                                                        <!-- mdbCard content -->
                                                        <div class="card-body">

                                                            <!-- Title-->
                                                            <a>
                                                                <h4 class="card-title">{{$friend->name}}</h4>
                                                            </a>
                                                            <a class="card-meta">{{$friend->location}}</a>
                                                            <!-- Text -->
                                                            <p class="card-text">{{$friend->email}}</p>
                                                            <hr>
                                                            <a class="card-meta" href="{{'perfil/'.$friend->id}}"><span><i class="fa fa-user"></i>Ver amigos</span></a>
                                                            <p class="card-meta float-right">{{$friend->created_at}}</p>

                                                        </div>
                                                        <!-- mdbCard content -->

                                                    </div>
                                                </div>
                                                <!-- Grid column -->
                                                    @endforeach
                                                    @endif
                                            </div>
                                            <!-- Grid row -->
        
                                        </div>

                                    </li></ul></div>
                            <!-- </div> -->
                        </div>


                        <!-- </div> -->

                    </div>

                </div>
                <!--fim Amigos-->


                <!-- Posts -->

                <div class="tab-pane" id="tposts" role="tabpanel">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text mt-2">Publique seu Posts</h5>
                            <form method="POST" action="{{ route('seusPostsUpdate') }}" class="md-form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="escondido" name="user_id">
                    <textarea class="form-control" name="description" id="description" type="description"></textarea>

                    <div class="form-group mt-3 row d-inline-block">

                            <div class="file-field ml-3">
                                <a class="btn-floating purple-gradient mt-0 float-left waves-effect waves-light">
                                <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                                <input type="file" id="photo"  class="form-control @error('photo') is-invalid @enderror" name="photo" autocomplete="current-image">
                                </a>
                            <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Publique sua foto">
                            </div>
                            </div>
                            @error('photo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                            <button type="submit" class="submit-form mt-4 mr-3">Publicar</button>

                    </div>
                </form>
                        </div>
                        <div class="card-block p-5">
                            <div class="view-info">
                                <div class="row">

                                                <section>
                @foreach($posts as $key => $value)
                <div class="media d-block d-md-flex mt-4">
                    @if($value->user[0]->image != null)
                        <img class="card-img-64 rounded-circle z-depth-1 d-flex mx-auto mb-3"
                             src="{{ url('storage/users/'.$value->user[0]->image) }}" width="90" alt="Generic placeholder image">
                    @else
                        <img class="card-img-64 rounded-circle z-depth-1 d-flex mx-auto mb-3"
                             src="/img/user.jpg" width="90" alt="Generic placeholder image">
                    @endif
                    <div class="media-body text-center text-md-left ml-md-3 ml-0">
                        <h5 class="font-weight-bold mt-0">
                            <a class="text-default" href="">{{ $value->user[0]->name }}</a>
                            <a href="" class="pull-right text-default">
                                <i class="fas fa-reply"></i>
                            </a>
                        </h5>
                        @if($value->photo != null)
                                <img src="{{ url('storage/posts/'.$value->photo) }}" width="100%">
                        @endif
                        {!!$value->description!!}
                        <hr>
                      </div>
                    </div>
    @endforeach
                              </section>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </section>
    <!--Fim das postagens-->

</div>
</div>
</div>
<!--fim conteiner-->


@endsection 