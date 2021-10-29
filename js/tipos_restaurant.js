$(document).ready(function () {
   $.ajax({
      type: 'POST',
      url: '../admin/scripts/servicios_restaurant.php',
      data: {},
   }).done(function (servicios) {
      $('#servicios').html(servicios);
   });
});
