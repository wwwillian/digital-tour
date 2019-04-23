<?php
include "inc/head.php";
include "inc/header.php";
?>

<div class="caixa container">

    <div class="formulario">
        <section>

            <div class="fotocadastro">
                <span>Cadastro</span>
            </div>
            <form action="/action_page.php">

                <div class="form-inline">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" placeholder="Seu some">

                    <label for="sobrenome">Sobrenome:</label>
                    <input type="text" class="form-control" id="sobrenome" placeholder="Insira seu sobrenome">

                </div>

                <div class="form-inline">
                    <span>Sexo:</span>
                    <label for="sexo" class="masculino">Masculino:</label>
                    <input type="radio" class="form-control" id="masculino">
                    <label for="sexo">Feminino:</label>
                    <input type="radio" class="form-control" id="famino">

                </div>

                <div class="form-inline">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" placeholder="Insira seu e-mail">

                    <label for="data">Data de nascimento:</label>
                    <input type="date" class="form-control" id="data">
                </div>

                <div class="form-inline">
                    <label for="senha">Senha:</label>
                    <input type="password" class="form-control" id="senha" placeholder="Sua senha">

                    <label for="telefone">Telefone:</label>
                    <input type="text" class="form-control" id="telefone" placeholder="(**)********">
                </div>


                <button type="submit" class="botaocadas btn btn-primary">Enviar</button>
            </form>
        </section>
    </div>
</div>

<?php
include "inc/footer.php";
?>