<?php
  session_start();
  require_once('../class/DatosUsuario.php');

  $u=new UsuarioDatos();
  $usuario=$u->login(md5($_POST['password2']),$_POST['email2']);
  
 
  
  
  if($usuario){
      $_SESSION['usuario']['email']=$usuario->getEmail();
      $usuario = $usuario->getEmail();
  }else{
      $usuario = " usuario no existente ";
  }
 
  echo $usuario;



?>