<?php
require_once('../../class/DatosRestaurant.php');


$r = new DatosRestaurant();
$guardar = false;
$resultado = null;

if (!empty($_FILES['fotos'])) {
  $nombre = basename($_FILES['fotos']['nombre']);
    $ruta = "../../img/".$nombre; 

   if (move_uploaded_file($_FILES['fotos']['tmp_name'], $ruta)) { 
       $rest = new Restaurant($_POST['nombre'], $_POST['descripcion'],'', '', '', $nombre , '', '', '', $_POST['especialidad'], '');
       $rest->setId($_POST['id']);
       $resultado = $r->modificar($rest);
       $guardar = true;
    }
}


if (!$guardar) {
    $rest = new Restaurant($_POST['nombre'], $_POST['descripcion'], '', '', '', '', '', '', '', $_POST['especialidad'], '');
    $rest->setId($_POST['id']);
    $resultado = $r->modificar($rest);
}

echo $resultado;
