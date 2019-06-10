@extends('layouts.conectado')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Meu Perfil</div>

                    <div class="card-body">

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-error">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('profileUpdate') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

                                <div class="col-md-6">
                                    <input id="nome" type="nome" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ auth()->user()->name  }}" required autofocus>

                                    @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ auth()->user()->email  }}" required disabled>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">Imagem Perfil</label>

                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" autocomplete="current-image">

                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cupPhoto" class="col-md-4 col-form-label text-md-right">Imagem Capa</label>

                                <div class="col-md-6">
                                    <input id="cupPhoto" type="file" class="form-control @error('image') is-invalid @enderror" name="cupphoto" autocomplete="current-image">

                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="date" class="col-md-4 col-form-label text-md-right">Data de nascimento</label>

                                <div class="col-md-6">
                                    <input id="date" type="date" class="form-control @error('password') is-invalid @enderror" name="date">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">Genero</label>

                                <div class="col-md-6">
                                    <label for="gender" class="col-md-4 col-form-label text-md-right">Feminino</label>
                                    <input id="gender" type="checkbox" class="form-control @error('password') is-invalid @enderror" name="gender"  value="Feminino">
                                    <label for="gender" class="col-md-4 col-form-label text-md-right">Masculino</label>
                                    <input id="gender" type="checkbox" class="form-control @error('password') is-invalid @enderror" name="gender"  value="Masculino">
                                    <label for="gender" class="col-md-4 col-form-label text-md-right">Outros</label>
                                    <input id="gender" type="checkbox" class="form-control @error('password') is-invalid @enderror" name="gender"  value="Outros">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-success">
                                        Atulizar Perfil
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
