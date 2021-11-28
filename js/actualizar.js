$(document).on('click', '#update_restaurant', function () {
   var date = new FormData(document.getElementById('#')); // falta la direccion donde ira el boton de actualizar 
   $.ajax({
      type: 'post',
      url: 'script/modificar_rest.php',
      data: date, 
      contentType: false,
      processData: false,
   }).done(function () {}); // falta el return
});
