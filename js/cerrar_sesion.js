$(document).on('click','#cerrar_sesion',function(){
    $.ajax({
            type: 'post',
            url: './scripts/cerrar_sesion.php',
            data:{}
    }).done(function(email){
            $(location).attr('href','index.php');
    })
});