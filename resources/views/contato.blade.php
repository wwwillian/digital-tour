@extends('layouts.desconectado')

@section('content')

    <div class="container">
        <section class="pagina-contato mt-3 pt-3">

            <div class="fundo-contato">
                <span class="SpanFaqContatoCadastro">Contato</span>
            </div>

            <form name="formcontato" id="contato" method="post">
                <label for="nome">Nome</label>
                <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome" />

                <label for="email">E-mail</label>
                <input class="form-control" type="email" name="email" id="email" placeholder="E-mail"  />

                <label for="telefone">Celular</label>
                <input type="number" class="form-control" placeholder="Celular" id="telefone" name="celular" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>

                <label for="mensagem">Mensagem</label>
                <textarea class="form-control text" name="mensagem" id="mensagem" placeholder="Escreva aqui sua mensagem!"
                          ></textarea>

                <a href="/home">Voltar para home</a>

                <button class="submit-form" onclick="return validar_form_contato()" >Enviar</button>
            </form>
        </section>
    </div>

@stop
