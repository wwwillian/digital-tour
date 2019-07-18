@extends('layouts.desconectado')

@section('content')
<section class="pagina-contato">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="fundo-contato mt-5">
                    <span class="SpanFaqContatoCadastro">Contato</span>
                </div>
                <form action="{{ route('postContact') }}" name="formcontato" id="contato" method="post">
                    @csrf
                    @include('messages')
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input class="form-control" type="text" name="name" id="nome" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="number" class="form-control" placeholder="telefone" id="celular" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea class="form-control text" name="bodyMessage" id="mensagem" placeholder="Escreva aqui sua mensagem!"></textarea>
                    </div>
                    <div class="form-group">
                        <a href="/home" class="ml-3">Voltar para home</a>
                        <button class="submit-form mr-3" onclick="return validar_form_contato()">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@stop