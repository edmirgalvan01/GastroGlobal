$(document).on('click', '.del', function () {
   var id = $(this).attr('data-id');
   $('#id_eliminar2').val(id);
});

$(document).on('click', '#delete_restaurant', function () {
   var datos = new FormData(
      document.getElementById('form_eliminar_restaurant')
   );
   $.ajax({
      type: 'post',
      url: 'scripts/eliminar_restaurant.php',
      contentType: false,
      processData: false,
      data: datos,
   }).done(function (restaurant) {});
});
