@extends('layouts.conectado')

@section('content')
<div class="container mt-5">
    <div class="mt-5">
        <div class="col-lg-12 col-md-12 col-xl-12 mt-5">
            <div class="row">
                <div class="d-flex justify-content-center h-100 mt-5">
                    <form class="searchbar" method="Post" action="/pesquisar-amigos">
                        @csrf
                        <input class="search_input" type="text" id="pesquisar" name="pesquisa" placeholder="Search...">
                        <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                    </form>
                </div>
            </div>
            <div class="row rowamizade">
                @foreach($friends as $friend)
                <div class="col-4 mt-5">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="view overlay flip-card-front">
                                @if($friend->image != null)
                                <img class="card-img-top" src="{{ url('storage/users/'.$friend->image) }}" alt="mdbCard image cap" height="310px">
                                <a href="#!">
                                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                </a>
                                @else
                                <img src="/img/user.jpg" class="card-img-top" height="310px">
                                @endif
                                <div class="card-body">
                                    <a>
                                        <h4 class="card-title">{{$friend->name}}</h4>
                                    </a>
                                    <a class="card-meta">{{$friend->location}}</a>
                                    <p class="card-text">{{$friend->email}}</p>
                                    <hr>
                                    <a class="card-meta" href="{{$friend->id}}"><span><i class="fa fa-user"></i>Ver amigos</span></a>
                                    <p class="card-meta float-right">{{$friend->created_at}}</p>
                                </div>
                            </div>
                            <div class="flip-card-back">
                                <h1>{{$friend->name}}</h1>
                                <div class="over">{{$friend->experience}}</div>
                                <a class="card-meta" href="{{'perfil/'.$friend->id}}"><span><i class="fa fa-user"></i>Ver amigos</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection