<?php

require_once('../../class/DatosRestaurant.php');
$r = new DatosRestaurant();
$guardadoFoto = false;

if (!empty($_POST['nombre']) && !empty($_POST['caracteristicas'])) {
    if (!empty($_FILES['foto'])) {
        $nombreFoto = basename($_FILES['foto']['name']); //del post foto sacaremos el 'name'
        $rutaGuardado = "../../img/" . $nombreFoto;
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $rutaGuardado)) {
            $restaurant = new Restaurant(
                $_POST['nombre_restaurant'],
                $_POST['descripcion'],
                $_POST['telefono_contacto_restaurant'],
                $_POST['direccion'],
                $_POST['propietario_restaurant'],
                $_POST['foto'],
                $_POST['email_restaurant'],
                $_POST['horario_entrada'],
                $_POST['horario_salida'],
                $_POST['especialidad'],
                $_POST['dias_laburo']
            );
            $r->crear($restaurant);
            $guardadoFoto = true;
        }
    }

    if (!$guardadoFoto) {
        $restaurant = new Restaurant(
            $_POST['nombre_restaurant'],
            $_POST['descripcion'],
            $_POST['telefono_contacto_restaurant'],
            $_POST['direccion'],
            $_POST['propietario_restaurant'],
            "defaultRestaurant.jpg",
            $_POST['email_restaurant'],
            $_POST['horario_entrada'],
            $_POST['horario_salida'],
            $_POST['especialidad'],
            $_POST['dias_laburo']
        );
        $r->crear($restaurant);
    }
    header('Location: ../../index.php');
} else {
    header('Location: ../pagina_admin.php');
}
