<?php
require_once('../../class/DatosRestaurant.php');


$r = new DatosRestaurant();
$guardar = false;
$result = null;

if (!empty($_FILES['Fotos'])) {
    $nombre = basename($_FILES['Fotos']['Nombre']);
    $ruta = ""; //falta definir la ruta de guardado

    if (move_uploaded_file($_FILES['Fotos']['#'], $ruta)) { // definir nombre central 
        $rest = new Restaurant($_POST['nombre'], $_POST['descripcion'], $_POST['telefono_contacto'], $_POST['direccion'], $_POST['id_propietario'], $_POST['fotos'], $_POST['email'], $_POST['horario_entrada'], $_POST['horario_salida'], $_POST['especialidad'], $_POST['dias_laboran']);
        $rest->setId($_POST['id']);
        $resultado = $r->modificar($rest);
        $guardar = true;
    }
}


if (!$guardar) {
    $rest = new Restaurant($_POST['nombre'], $_POST['descripcion'], $_POST['telefono_contacto'], $_POST['direccion'], $_POST['id_propietario'], $_POST['fotos'], $_POST['email'], $_POST['horario_entrada'], $_POST['horario_salida'], $_POST['especialidad'], $_POST['dias_laboran']);
    $rest->setId($_POST['id']);
    $resultado = $r->Modificar($rest);
}

echo $resultado;
