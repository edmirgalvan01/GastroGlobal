<?php
require_once('../class/DatosUsuario.php');

$u= new UsuarioDatos();
$guardado=false;

        if(!$guardado){
        $usuario= new Usuario($_POST['nombre'],md5($_POST['password']),$_POST['email']);
        $res=$u->crear($usuario);
        $guardado=true;
        }
echo $res;
?>