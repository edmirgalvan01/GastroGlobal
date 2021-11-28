$(document).on('click','#delete_restaurant',function(){ 
    var datos=new FormData(document.getElementById('form_delete_restaurant'));
    $.ajax({
      type:'post',
      url:'script/eliminar_restaurant.php',
      contentType:false,
      processData:false,
      data:datos
    }).done(function(restaurant){ 
       //alert(restaurant);
       mostrar();
    });
  });