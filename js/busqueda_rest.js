$('#buscar').keyup(function (evento) {
   var valor = $(this).val();
   $.ajax({
      type: 'post',
      url: '../admin/script/buscar_restaurant.php',
      data: { busqueda: valor },
   }).done(function (pagina) {
      // pagina solo es una prueba
      $('restaurant').html(); // variable hacia donde ira
   });
});
