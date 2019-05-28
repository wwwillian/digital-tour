@extends('layouts.masterDesconectado')

@section('content')

    <div class="caixa container">

        <div class="formulario">
            <section>

                <div class="fotocadastro">
                    <span class="SpanFaqContatoCadastro">Cadastro</span>
                </div>
                <form action="/action_page.php">

                    <div class="form-inline">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" placeholder="Nome">

                        <label for="sobrenome">Sobrenome:</label>
                        <input type="text" class="form-control" id="sobrenome" placeholder="Sobrenome">

                    </div>

                    <div class="form-inline">
                        <span>Sexo:</span>
                        <label for="sexo" class="masculino">Masculino:</label>
                        <input type="radio" name="sex" class="form-control" id="masculino">
                        <label for="sexo">Feminino:</label>
                        <input type="radio" name="sex"class="form-control" id="famino">

                    </div>

                    <div class="form-inline">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" id="email" placeholder="E-mail">

                        <label for="data">Data de nascimento:</label>
                        <input type="date" class="form-control" id="data">
                    </div>

                    <div class="form-inline">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" id="senha" placeholder="Senha">

                        <label for="telefone">Telefone:</label>
                        <input type="text" class="form-control" id="telefone">
                    </div>

                    <button type="submit" class="botaocadas btn btn-primary">Enviar</button>
                </form>
            </section>
        </div>
    </div>
@stop
