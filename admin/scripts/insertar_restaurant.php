<?php

require_once('../../class/DatosRestaurant.php');
$p = new DatosRestaurant();

$propietario = new Propietario($_POST['nombre_restaurant'], $_POST['descripcion'], $_POST['telefono_contacto'], $_POST['direccion'], $_POST['fotos'], $_POST['email'], $_POST['horario_entrada'], $_POST['horario_salida'], $_POST['especialidad'], $_POST['dias_laboran']);
$p->crear($propietario);

// header('Location: ../pagina_admin.php');