$('#buscar').keypress(function (evento) {
   if (evento.keycode == 13) {
      var valor = $(this).val();

      $.ajax({
         type: 'post',
         url: '../admin/script/buscar_restaurant.php',
         data: { busqueda: valor },
      }).done(function (pagina) {
         // pagina solo es una prueba
         $('restaurant').html(); // variable hacia donde ira
      });
   }
});
