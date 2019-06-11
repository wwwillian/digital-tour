@extends('layouts.desconectado')

@section('content')
<div class="container">
        <section class="pagina-contato margin-top mt-5 pt-3">

            <div class="fundo-contato">
                <span class="SpanFaqContatoCadastro">Cadastro</span>
            </div>

            <form method="POST" action="{{ route('register') }}" id="contato">
                        @csrf
                    <div class="row">
                        <div class="form-group">
                            <label for="name">{{ __('Nome completo') }}</label>

                            <div class="incadastro">
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

                            <div class="incadastro">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <label for="password">{{ __('Senha') }}</label>

                            <div class="incadastro">
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

                            <div class="incadastro">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        
                    <div class="form-group">
                            <label for="date">{{ __('Data de nascimento') }}</label>

                            <div class= "incadastro1" >
                                <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>

                            
                            </div>
                        </div>

                        <div class="form-group sex">
                        <span>Sexo:</span>
                        <label for="sexo" class="masculino">Masculino:</label>
                        <input type="radio" name="sex"  id="masculino">
                        <label for="sexo">Feminino:</label>
                        <input type="radio" name="sex" id="famino">

                    </div>
                    </div>
                    
    
                        <!-- <div class="form-group">
                            <label for="name">{{ __('Nome completo') }}</label>

                            <div >
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div> -->


                        <div class="form-group row col-md-12">
                            <div class="offset-11">
                                <button type="submit" class="submit-form">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
        </section>
    </div>

@endsection
