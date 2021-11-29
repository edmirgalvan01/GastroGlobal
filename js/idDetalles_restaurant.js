$(document).ready(function () {
   $(document).on('click', '.detalles', function () {
      var id = $(this).attr('data-id');
      $.ajax({
         type: 'POST',
         url: './scripts/detalles_restaurant.php',
         data: { id: id },
      }).done(function (datos) {
         $('#detalles').html(datos);
      });
   });
});
