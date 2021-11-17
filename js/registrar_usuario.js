$(document).ready(function(){
        $(document).on('click','#registrar',function(){ // probe con modales como el ejemplo de la profesora por ello tiene ese nombre
            var datos= new FormData(document.getElementById('registro_usuarios')); // cambiar el nombre del formulario 
            $.ajax({
                type: 'post',
                url: 'scripts/registrar_usuario.php',
                data: datos,
                contentType:false,
                processData:false
            }).done(function(res){
                 //alert(res);
                 $('#nombre').val("");
                 $('#email').val("");
                 $('#password').val("");    

                 $('#login').iniciar_sesion('show');
            });
        });
    });
