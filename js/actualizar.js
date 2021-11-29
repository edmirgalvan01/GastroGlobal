$(document).on('click', '#editar_b', function () {
   var date = new FormData(document.getElementById('form_editar_restaurant')); 
   $.ajax({
      type: 'post',
      url: 'script/modificar_rest.php',
      data: date, 
      contentType: false,
      processData: false,
   }).done(function (resultado) {}); 
});
