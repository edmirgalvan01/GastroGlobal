$(document).ready(function () {
   $.ajax({
      type: 'POST',
      url: '../scripts/leer_restaurant.php',
      dataType: 'json',
      data: {},
   }).done(function (informacion) {
      var nombre = informacion[0];
      var foto = informacion[1];
      var descripcion = informacion[2];
      var horario = informacion[3];
      var direccion = informacion[4];
      var telefono_contacto = informacion[5];
      var especialidad = informacion[6];
      $('#nombre').text(nombre);
      $('#foto_restaurant').attr('src', '../img/' + foto);
      $('#especialidad').text(especialidad);
      $('#horario').text(horario);
      $('#descripcion').text(descripcion);
   });
});
