$(document).ready(function () {
   $.ajax({
      type: 'POST',
      url: './scripts/mostrar_restaurant.php',
      data: {},
   }).done(function (cards) {
      $('#lista_restaurantes').html(cards);
   });
});
