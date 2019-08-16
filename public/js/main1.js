$(document).ready(function(e) {
    $(".divConteudo").hide();

    $("#btnMostrarEsconder").click(function(e) {
        $(".divConteudo").toggle();
    });
});

$(document).ready(function(e) {
    $(".divConteudo1").hide();

    $("#btnMostrarEsconder1").click(function(e) {
        $(".divConteudo1").toggle();
    });
});

$(document).ready(function() {
    $(".artigo").hide();
    $(".botao-artigo").click(function(e) {
        $(this)
            .parent()
            .next(".artigo")
            .toggle("d-none");
    });
});
// inicio
