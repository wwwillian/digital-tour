@extends('layouts.desconectado')

@section('content')

<div class="container">
    <section class="pagina-contato login1 margin-top mt-5 pt-3">
        <div class="fundo-login">
            <span class="SpanFaqContatoCadastro">Login</span>
        </div>
        <form method="POST" action="{{ route('login') }}" id="contato" class="login">
            @csrf
            <div class="form-group row">
                <label for="email" class="label1 col-md-4 col-form-label text-md-right">{{ __('E-Mail:') }}</label>
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class=" label1 col-md-4 col-form-label text-md-right">{{ __('Senha:') }}</label>
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group offset-2 row">
                <div class="col-md-6">
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                    @if (Route::has('register'))
                    <a class="nav-link h5 telalogin-a" href="{{ route('register') }}">Cadastra-se</a>
                    @endif
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-8 offset-md-4 mt-2">
                    <button type="submit" class="submit-form btnlogin">
                        {{ __('Login') }}
                    </button>
                </div>
            </div>
        </form>
    </section>
</div>

@endsection