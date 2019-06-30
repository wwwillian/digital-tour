$(document).ready(function () {
    $('.escondido').hide()

    $('.exibindo').click(function () {
        $('.escondido').toggle('slow, 1000')
    })
})

// $(document).ready(function () {

//     $("#telefone").mask("(00) 0000-0000")

//     $("#telefone").mask("(00) 0000-00009")

//     $("#telefone").blur(function (event) {
//         if ($(this).val().length == 15) {
//             $("#telefone").mask("(00) 00000-0009")
//         } else {
//             $("#telefone").mask("(00) 0000-00009")
//         }
//     })
// })

$(document).ready(function (e) {
    $(".divConteudo").hide();

    $("#btnMostrarEsconder").click(function (e) {
        $(".divConteudo").toggle();
    });
});

$(document).ready(function (e) {
    $(".divConteudo1").hide();

    $("#btnMostrarEsconder1").click(function (e) {
        $(".divConteudo1").toggle();
    });
});




$(document).ready(function () {
    
    $('.artigo').hide();
    $('.botao-artigo').click(function (e) {
        
        $(this).parent().next('.artigo').toggle('d-none');
        
      
    });

});

$(document).ready(function () {
    baguetteBox.run('.tz-gallery', {
        // Custom options
    });
})

function validar_form_contato(){
    var nome = formcontato.nome.value;
    var email = formcontato.email.value;
    var celular = formcontato.celular.value;
    var mensagem = formcontato.mensagem.value;
    
    if(nome == ""){
        alert("Campo nome é obrigatorio");
        formcontato.nome.focus();
        return false;
    }if(email == ""){
        alert("Campo email é obrigatorio");
        formcontato.email.focus();
        return false;
    }if(celular == ""){
        alert("Campo Telefone é obrigatorio");
        formcontato.celular.focus();
        return false;
    }if(mensagem == ""){
        alert("Campo mensagem é obrigatorio");
        formcontato.mensagem.focus();
        return false;
    }
}

function validar_form_cadastro(){
    var name = formcadastro.name.value;
    var email = formcadastro.email.value;
    var password = formcadastro.password.value;
        
    if(name == ""){
        alert("Campo nome é obrigatorio");
        formcadastro.nome.focus();
        return false;
    }if(email == ""){
        alert("Campo email é obrigatorio");
        formcadastro.email.focus();
        return false;
    }if(password == ""){
        alert("Campo Senha é obrigatorio");
        formcadastro.celular.focus();
        return false;
    }
}

