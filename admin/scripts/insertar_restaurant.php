<?php

require_once('../../class/DatosRestaurant.php');
$r = new DatosRestaurant();
$guardadoFoto = false;

if (!empty($_POST['nombre_restaurant']) && !empty($_POST['dias_laburo'])) {
    //Si no viene vacio el campo 'foto'
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
                $nombreFoto,
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

    header('Location: ../pagina_admin.php');
}
