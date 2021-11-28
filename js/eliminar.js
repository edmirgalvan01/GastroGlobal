$(document).on('click','#borrar',function(){
    var datos=new FormData(document.getElementById('#'));// localizacion del boton de borrar 
    $.ajax({
      type:'post',
      url:'script/', // localizacion del script de borrar 
      contentType:false,
      processData:false,
      data:datos
    }).done(function(){ // lo que devuelve
       //alert(#);
       mostrar();
    });
  });