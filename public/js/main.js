$(document).ready(function () {
    $('.escondido').hide()

    $('.exibindo').click(function () {
        $('.escondido').toggle('slow, 1000')
    })
})

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

baguetteBox.run('.tz-gallery');



$(document).ready(function (e) {
    
    $('.artigo').hide()
    $('button').click(function (e) {
        
        $(this).parent().next('.artigo').slideToggle('slow');
        
      
    });

});
