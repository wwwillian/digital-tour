<?php
include "inc/head.php";
include "inc/headerdif2.php";
?>

<div class="caixa container formca">

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

    <script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="jquery/jquery.mask.mim.js"></script>
    <script type="text/javascript">
    
        $(document).ready(function () {

            $("#telefone").mask("(00) 0000-0000")

            $("#telefone").mask("(00) 0000-00009")

            $("#telefone").blur(function (event) {
                if ($(this).val().length == 15) {
                    $("#telefone").mask("(00) 00000-0009")
                } else {
                    $("#telefone").mask("(00) 0000-00009")
                }
            })
        })
    </script>

<?php
include "inc/footer.php";
?>