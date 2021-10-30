<?php

require_once('../../class/DatosRestaurant.php');
$p = new DatosRestaurant();

$propietario = new Restaurant(
    $_POST['nombre_restaurant'],
    $_POST['descripcion'],
    $_POST['telefono_contacto'],
    $_POST['direccion'],
    $_POST['propietario_restaurant'],
    $_POST['fotos'],
    $_POST['email'],
    $_POST['horario_entrada'],
    $_POST['horario_salida'],
    $_POST['especialidad'],
    $_POST['dias_laboran']
);
$p->crear($propietario);

// header('Location: ../pagina_admin.php');