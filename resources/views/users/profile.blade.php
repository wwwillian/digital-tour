@extends('layouts.conectado')

@section('content')
<div class="container">
    <div class="row justify-content-center profil">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header">
                    <span>Editar Perfil</span>

                </div>

                <div class="card-body">

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

                    <form method="POST" action="{{ route('profileUpdate') }}" enctype="multipart/form-data" id="contato">
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
                            <label for="cupphoto" class="col-md-4 col-form-label text-md-right">Imagem Capa</label>

                            <div class="col-md-6">
                                <input id="cupphoto" type="file" class="form-control @error('cupphoto') is-invalid @enderror" name="cupphoto" autocomplete="current-image">

                                @error('cupphoto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">Data de nascimento</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control @error('password') is-invalid @enderror" name="date" value="{{ auth()->user()->date  }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">Genero</label>

                            <div class="col-md-6">
                                <label for="gender">Feminino:</label>
                                <input id="gender" type="radio" name="gender" value="Feminino">
                                <label for="gender">Masculino:</label>
                                <input id="gender" type="radio" name="gender" value="Masculino">
                                <label for="gender">Outros:</label>
                                <input id="gender" type="radio" name="gender" value="Outros">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="maritalstatus" class="col-md-4 col-form-label text-md-right">Status Civil</label>

                            <div class="col-md-6">
                                <select name="maritalstatus">
                                    <option value="Casado">Casado</option>
                                    <option value="Enrolado">Enrolado</option>
                                    <option value="Namorando">Namorando</option>
                                    <option value="Solteiro">Solteiro</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">Localização</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control" name="location" value="{{ auth()->user()->location  }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobilenumber" class="col-md-4 col-form-label text-md-right">Telefone</label>

                            <div class="col-md-6">
                                <input id="mobilenumber" type="number" class="form-control" name="mobilenumber" value="{{ auth()->user()->mobileNumber  }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="facebook" class="col-md-4 col-form-label text-md-right">Facebook</label>

                            <div class="col-md-6">
                                <input id="facebook" type="text" class="form-control" name="facebook" value="{{ auth()->user()->facebook  }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="instagram" class="col-md-4 col-form-label text-md-right">Instagram</label>

                            <div class="col-md-6">
                                <input id="instagram" type="text" class="form-control" name="instagram" value="{{ auth()->user()->instagram  }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="skype" class="col-md-4 col-form-label text-md-right">Skype</label>

                            <div class="col-md-6">
                                <input id="skype" type="text" class="form-control" name="skype" value="{{ auth()->user()->skype  }}">
                            </div>
                        </div>

                        <div class="form-group texto row">
                            <label for="experience" class="col-md-4 col-form-label text-md-right">Experiencias</label>

                            <div class="col-md-6">
                                <textarea id="experience" type="text" name="experience">{{ auth()->user()->experience }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="submit-form">
                                    Atualizar Perfil
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