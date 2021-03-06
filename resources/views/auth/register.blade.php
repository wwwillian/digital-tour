@extends('layouts.desconectado')

@section('content')
<div class="container">
    <section class="pagina-contato margin-top mt-5 pt-3">
        <div class="fundo-contato margin-top">
            <span class="SpanFaqContatoCadastro">Cadastro</span>
        </div>
        <form method="POST" action="{{ route('register') }}" id="contato">
            @csrf
            <div class="form-group">
                <label for="name">{{ __('Nome completo') }}</label>

                <div>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="email">{{ __('E-mail') }}</label>
                <div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="password">{{ __('Senha') }}</label>

                <div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="password-confirm">{{ __('Confirme sua Senha') }}</label>

                <div>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="submit-form" onclick="return validar_form_cadastro()">
                    {{ __('Register') }}
                </button>
                <div class="clearfix"></div>
            </div>
        </form>
    </section>
</div>

@endsection