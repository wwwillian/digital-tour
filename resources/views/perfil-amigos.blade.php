@extends('layouts.conectado')

@section('content')

    <div class="container">
        <div class="">
            <div class="col-lg-12 col-md-12 col-xl-12">
                <div class="awesome user width-cover mt-5">
                    
                        @if($amigo->cupPhoto != null)
                        <div class="container img-fundo" id="btnMostrarEsconder" style="background-image: url({{ url('storage/usersfundo/'.$amigo->cupPhoto) }})">
                </div>
                        @else
                        <div class="container img-fundo" id="btnMostrarEsconder" style="background-image: url(/img/imagenopaisagem.jpg)">
                </div>
                        @endif
                    
                </div>
                <div class="items-banner"></div>
                <div class="img-perfil">
                    <a href="#">
                        @if($amigo->image != null)
                            <img src="{{ url('storage/users/'.$amigo->image) }}" id="btnMostrarEsconder1" alt="img perfil"  width="170" class="btnMostrarEsconder1">
                        @else
                            <img src="/img/user.jpg" id="btnMostrarEsconder1" alt="img perfil"  width="170" class="btnMostrarEsconder1">
                        @endif
                    </a>
                    <div class="h1capa">
                        <h1 class="perfil">{{ $amigo->name }}</h1> 
                    </div>
                </div>
                <div class="btn-submit">
                @if(auth()->user()->id != $amigo->id)
                
                
                 @foreach($botao as $key)
                        @if($key->friend_id != $amigo->id)
                  
                <a href="/perfil/excluir/{{ $key->id }}" class="btn btn-sm submit-form btn-submit">Excluir</a>
                @else
                <form method="POST" action="{{ route('adicionarAmigo') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="escondido" name="user_id" value="{{auth()->user()->id}}">
                    <input type="hidden" id="escondido" name="friend_id" value="{{$amigo->id}}">
                    <input type="hidden" id="escondido" name="add" value="0">
                
                    <button type="submit" class="submit-form btn-submit">
                        Adicionar
                    </button>
                   
                </form>
                @endif
        
                @endforeach
                @endif
                </div>
                <div>
                    <div class="">
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
                           



                            <!--Fotos-->
                <div class="tab-pane" id="tfotos" role="tabpanel">
                    <div class="card card-gallery">
                        <div class="card-header">
                            <h5 class="card-header-text">Galeria</h5>
                        </div>
                      
                        <div class="conteudofotos  tz-gallery pt-5 pb-5 pl-5 pr-3 gallerydiv">
                            @foreach($posts as $key => $value)
                            @if($value->user[0]->id == $amigo->id)
                            @if($value->photo != null)

        
                            <a class="lightbox mr-4 mb-4" href="{{url('storage/posts/'.$value->photo)}}">
                                <img src="{{url('storage/posts/'.$value->photo)}}" alt="Park" class="mr-4 mb-4">
                            </a>
                            
                            @endif
                            @endif
                            @endforeach

                        </div>                    
                    </div>
                </div>

                    <!-- </div> -->
                <!-- </div> -->
                <!-- </div> -->
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
                                             
                                               
                                                @foreach($amigos as $friend => $value)
                                               

                                                    <div class="col-lg-4 col-md-6 mb-4">
                                                    <div class="card card-personal mb-md-0 mb-4">

                                                        <!-- mdbCard image-->
                                                       
                                                        <div class="view overlay">
                                                        
                                                        @if($value->image != null)
                        
                                                            <img class="card-img-top" src="{{ url('storage/users/'.$value->image) }}" alt="mdbCard image cap">
                                                             <a href="#!">
                                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                            </a>
                                                            @else
                                                             <img src="/img/user.jpg" class="card-img-top">
                                                        @endif
                                                    
                                                        </div>
                                                        <!-- mdbCard image-->

                                                        <!-- mdbCard content -->
                                                        <div class="card-body">

                                                            <!-- Title-->
                                                            <a>
                                                                <h4 class="card-title">{{$value->name}}</h4>
                                                            </a>
                                                            <a class="card-meta">{{$value->location}}</a>
                                                            <!-- Text -->
                                                            <p class="card-text">{{$value->email}}</p>
                                                            <hr>
                                                            <a class="card-meta" href="{{$value->id}}"><span><i class="fa fa-user"></i>Ver amigos</span></a>
                                                            <p class="card-meta float-right">{{$value->created_at}}</p>

                                                        </div>
                                                        <!-- mdbCard content -->

                                                    </div>
                                                </div>
                                                <!-- Grid column -->
                                                @endforeach
                                                
                                                
                                                  
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
                                                                        <div class="card-block p-5">
                           
                        </div>              </a>
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

                            <div class="tab-pane" id="tposts" role="tabpanel">
                            <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text mt-2">Posts</h5>
</div>
                            <div class="view-info">
                                <div class="row">

                                                <section class="p-4">   
                                      
                                                @foreach($posts as $key => $value)
                                                @if($value->user[0]->id == $amigo->id)
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

                    @endif
    @endforeach
                              </section>

                                </div>
                            </div>
                        </div>

</div>
</div>    

                        </div>
                        <!-- Fim de Posts -->
                    </div>
                    <!-- fim da col-lg-12 -->
</div>


@endsection



