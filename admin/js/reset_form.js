$(document).ready(function () {
   $.ajax({
      type: 'POST',
      url: './scripts/insertar_propietario.php',
      data: {},
   }).done(function () {
      $('#nombre_p').val('');
      $('#email_p').val('');
      $('#password_p').val('');
   });

   $.ajax({
      type: 'POST',
      url: './scripts/insertar_restaurant.php',
      data: {},
   }).done(function () {
      $('#nombre_restaurant').val('');
      $('#email_restaurant').val('');
      $('#dias_laburo').val('');
      $('#horario_entrada').val('');
      $('#horario_salida').val('');
      $('#direccion').val('');
      $('#telefono_contacto_restaurant').val('');
      $('#descripcion').val('');
   });
});
