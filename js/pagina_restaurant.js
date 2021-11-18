$(document).ready(function () {
   $.ajax({
      type: 'POST',
      url: '../scripts/leer_restaurant.php',
      data: {},
   }).done(function (informacion) {
      console.log(informacion);
   });
});
