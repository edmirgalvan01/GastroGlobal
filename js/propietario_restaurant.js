$(document).ready(function () {
   $.ajax({
      type: 'POST',
      url: '../admin/scripts/propietarios_restaurant.php',
      data: {},
   }).done(function (propietarios) {
      $('#propietario_restaurant').html(propietarios);
   });
});
