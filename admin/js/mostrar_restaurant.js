$(document).ready(function () {
   $.ajax({
      type: 'POST',
      url: './scripts/mostrar_restaurante.php',
      data: {},
   }).done(function (cards) {
      $('#lista_restaurantes').html(cards);
   });
});
