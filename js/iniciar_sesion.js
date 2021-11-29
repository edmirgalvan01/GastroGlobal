$(document).on('click','#iniciar',function(){
    var datos= new FormData(document.getElementById('form_inicio_sesion'));
    $.ajax({
            type: 'post',
            url: './scripts/iniciar_sesion.php',
            data: datos,
            contentType: false,
            processData: false  
    }).done(function(usuario){
            //alert(usuario);
            $(location).attr('href','./admin/panel.php');     
    });
  
});