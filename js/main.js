$(document).ready(function() {
  $('.escondido').hide();

  $('.exibeConteudo').click(function() {
    $(this).next().toggle('slow, 1000');
  });
 });
