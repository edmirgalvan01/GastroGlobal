$('#input__search').keyup(function (evento) {
   //hace referencia al valor del evento
   var valor = $(this).val();

   $.ajax({
      type: 'POST',
      url: './admin/scripts/buscar_restaurant.php',
      data: { buscar: valor },
   }).done(function (resultados) {
      $('#search__results').html(resultados);
   });
});
