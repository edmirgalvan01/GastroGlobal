$(document).on('click','.del', function(){
    var id=$(this).attr('data-id');
        //alert(id);
        $('#id_eliminar2').val(id);
});

$(document).on('click','#eliminar_b',function(){ 
    var datos=new FormData(document.getElementById('form_eliminar_restaurant'));
    $.ajax({
      type:'post',
      url:'scripts/eliminar_restaurant.php',
      contentType:false,
      processData:false,
      data:datos
    }).done(function(restaurant){ 
       //alert(restaurant);
    });
  });