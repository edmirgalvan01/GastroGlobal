<?php
require_once('../../class/DatosRestaurant.php');

$r = new DatosRestaurant();
$guardar = false;
$result = null;

if (!empty($_FILES['foto'])) {
    $nombre = basename($_FILES['foto']['name']);
    $ruta = "../../img" . $nombre;

    if (move_uploaded_file($_FILES['foto']['tmp_name'], $ruta)) {
        $rest = new Restaurant($_POST['nombre'], $_POST['descripcion'], $_POST['telefono_contacto'], $_POST['direccion'], $_POST['id_propietario'], $_POST['foto'], $_POST['email'], $_POST['horario_entrada'], $_POST['horario_salida'], $_POST['especialidad'], $_POST['dias_laboran']);
        $rest->setId($_POST['id']);
        $resultado = $r->modificar($rest);
        $guardar = true;
    }
}


if ($guardar == false) {
    $rest = new Restaurant($_POST['nombre'], $_POST['descripcion'], $_POST['telefono_contacto'], $_POST['direccion'], $_POST['id_propietario'], $_POST['foto'], $_POST['email'], $_POST['horario_entrada'], $_POST['horario_salida'], $_POST['especialidad'], $_POST['dias_laboran']);
    $rest->setId($_POST['id']);
    $resultado = $r->modificar($rest);
}

echo $resultado;
