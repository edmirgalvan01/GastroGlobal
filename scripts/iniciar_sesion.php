<?php
session_start();
require_once('../class/DatosUsuario.php');

$u = new UsuarioDatos();
//seleccionar el usuario que contenga el password y el email de los campos
$usuario = $u->login(md5($_POST['password2']), $_POST['email2']);

if ($usuario) {
  $_SESSION['usuario']['email'] = $usuario->getEmail();
  $usuario = $usuario->getEmail();
} else {
  $usuario = "Usuario no existente";
}

echo $usuario;
