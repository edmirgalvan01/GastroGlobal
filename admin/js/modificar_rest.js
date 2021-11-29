$(document).ready(function () {
   $(document).on('click', '#editar_r', function () {
      var datos = new FormData(
         document.getElementById('form_editar_restaurant')
      );
      $.ajax({
         type: 'POST',
         url: './scripts/modificar_rest.php',
         contentType: false,
         processData: false,
         data: datos,
      }).done(function () {
         console.log('Todo listo');
      });
   });
});
