$(document).ready(function () {
   $.ajax({
      type: 'POST',
      url: './scripts/mostrar_restaurant.php',
      data: {},
   }).done(function (cards) {
      $('#lista_restaurantes').html(cards);
   });

   $(document).on('click', '.id_restaurant', function () {
      //this apunta solo al que activo el evento
      var dataId = $(this).attr('data-id');
   });
});
