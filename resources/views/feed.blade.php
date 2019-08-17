@extends('layouts.conectado')

@section('content')
<div class="container">
    <section class="my-5">
        <div class="card-header border-0 font-weight-bold margin-top">Postagem</div>
        <div class="d-md-flex flex-md-fill mt-4 px-1">
            <div class="col-sm-12 col-mg-2 col-lg-2">
                <div class="d-flex justify-content-center mr-md-5">
                    @if(auth()->user()->image != null)
                    <img src="{{ url('storage/users/'.auth()->user()->image) }}" alt="img perfil" class="btnMostrarEsconder1 card-img-100 z-depth-1 mb-4 btnMostrarEsconder1">
                    @else
                    <img src="/img/user.jpg" alt="img perfil" class="btnMostrarEsconder1 card-img-100 z-depth-1 mb-4 btnMostrarEsconder1">
                    @endif
                </div>
            </div>
            <div class="container">
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
                <form method="POST" action="{{ route('postsUpdate') }}" class="md-form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="escondido" name="user_id">
                    <textarea class="form-control" name="description" id="description" type="description"></textarea>
                    <div class="form-group mt-3 row d-inline-block">
                        <div class="file-field ml-3">
                            <a class="btn-floating purple-gradient mt-0 float-left waves-effect waves-light">
                                <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                                <input type="file" id="photo" class="form-control @error('photo') is-invalid @enderror" name="photo" autocomplete="current-image">
                            </a>
                        </div>
                        @error('photo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="submit-form mt-4 mr-3">Publicar</button>
                </form>
            </div>
        </div>
    </section>
</div>
<div class="container">
    <div class="card-header border-0 font-weight-bold">Posts</div>
    <section>
        @foreach($posts as $key => $value)
        <div class="media d-block d-md-flex mt-4">
            @if($value->user[0]->image != null)
            <a href="{{'perfil/'.$value->user[0]->id}}">
                <img class="btnMostrarEsconder1 card-img-64 rounded-circle z-depth-1 d-flex mx-auto mb-3" src="{{ url('storage/users/'.$value->user[0]->image) }}" width="90" alt="Generic placeholder image">
            </a>
            @else
            <a href="{{'perfil/'.$value->user[0]->id}}">
                <img class="btnMostrarEsconder1 card-img-64 rounded-circle z-depth-1 d-flex mx-auto mb-3" src="/img/user.jpg" width="90" alt="Generic placeholder image">
            </a>
            @endif
            <div class="media-body text-center text-md-left ml-md-3 ml-0">
                <h5 class="font-weight-bold mt-0">
                    <a class="text-default" href="{{'perfil/'.$value->user[0]->id}}">{{ $value->user[0]->name }}</a>
                    <a href="{{'perfil/'.$value->user[0]->id}}" class="pull-right text-default">
                        <i class="fas fa-reply"></i>
                    </a>
                </h5>
                @if($value->photo != null)
                <img src="{{ url('storage/posts/'.$value->photo) }}" width="100%" height="100%">
                @endif
                {!!$value->description!!}
            </div>
        </div>
        <hr>
        @endforeach
    </section>
    @endsection
</div>