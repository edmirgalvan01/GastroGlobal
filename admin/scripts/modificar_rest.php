<?php
require_once('../../class/DatosRestaurant.php');

$r = new DatosRestaurant();
$guardar = false;
$result = null;

if (!empty($_FILES['foto'])) {
    $nombre = basename($_FILES['foto']['name']);
    $ruta = "../../img" . $nombre;

    if (move_uploaded_file($_FILES['foto']['tmp_name'], $ruta)) {
        $rest = new Restaurant(
            $_POST['nombre'],
            $_POST['descripcion'],
            $_POST['telefono'],
            $_POST['direccion'],
            $_POST['propietario'],
            $_POST['foto'],
            $_POST['email'],
            $_POST['horario1'],
            $_POST['horario2'],
            $_POST['especialidad'],
            $_POST['dias']
        );
        $rest->setId($_POST['id']);
        $resultado = $r->modificar($rest);
        $guardar = true;
    }
}


if ($guardar == false) {
    $rest = new Restaurant(
        $_POST['nombre'],
        $_POST['descripcion'],
        $_POST['telefono'],
        $_POST['direccion'],
        $_POST['propietario'],
        $_POST['foto'],
        $_POST['email'],
        $_POST['horario1'],
        $_POST['horario2'],
        $_POST['especialidad'],
        $_POST['dias']
    );
    $rest->setId($_POST['id']);
    $resultado = $r->modificar($rest);
}

echo $resultado;
