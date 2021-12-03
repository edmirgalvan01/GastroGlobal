<?php
require_once('../../class/DatosRestaurant.php');


$r = new DatosRestaurant();
$guardar = false;
$resultado = null;

if (!empty($_FILES['foto_m'])) {
  $nombre = basename($_FILES['foto_m']['nombre']);
    $ruta = "../../img/".$nombre; 

   if (move_uploaded_file($_FILES['foto_m']['tmp_name'], $ruta)) { 
       $rest = new Restaurant($_POST['nombre'], $_POST['descripcion'],'', $_POST['direccion'], '', $nombre , '', '', '', $_POST['especialidad'], '');
       $rest->setId($_POST['id']);
       $resultado = $r->modificar($rest);
       $guardar = true;
    }
}


if (!$guardar) {
    $rest = new Restaurant($_POST['nombre'], $_POST['descripcion'], '', $_POST['direccion'], '', $nombre, '', '', '', $_POST['especialidad'], '');
    $rest->setId($_POST['id']);
    $resultado = $r->Modificar($rest);
}

echo $resultado;
