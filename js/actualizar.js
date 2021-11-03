$(document).on('click', '#update_restaurant', function () {
   var date = new FormData(document.getElementById('#')); // falta el raiz a donde ira el editar
   $.ajax({
      type: 'post',
      url: 'script/modificar_rest.php',
      data: {}, // falta agregar los datos
      contentType: false,
      processData: false,
   }).done(function (rest) {});
});
