$(document).ready(function () {
   $(document).on('click', '#registrar', function () {
      var datos = new FormData(document.getElementById('registro_usuarios'));
      $.ajax({
         type: 'post',
         url: 'scripts/registrar_usuario.php',
         data: datos,
         contentType: false,
         processData: false,
      }).done(function (res) {
         //alert(res);
         $('#nombre').val('');
         $('#email').val('');
         $('#password').val('');

         $('#login').iniciar_sesion('show');
      });
   });
});
