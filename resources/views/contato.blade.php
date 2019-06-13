@extends('layouts.desconectado')

@section('content')

    <div class="container">
        <section class="pagina-contato margin-top mt-5 pt-3">

            <div class="fundo-contato">
                <span class="SpanFaqContatoCadastro">Contato</span>
            </div>

            <form id="contato">
                <label for="nome">Nome</label>
                <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome" />

                <label for="email">E-mail</label>
                <input class="form-control" type="email" name="email" id="email" placeholder="E-mail" required />

                <label for="telefone">Celular</label>
                <input type="text" class="form-control" placeholder="Celular" id="telefone" name="celular"><br>

                <label for="mensagem">Mensagem</label>
                <textarea class="form-control" name="mensagem" id="mensagem" placeholder="Escreva aqui sua mensagem!"
                          required></textarea>

                <a href="/home">Voltar para home</a>

                <button class="submit-form">Enviar</button>
            </form>
        </section>
    </div>

@stop
