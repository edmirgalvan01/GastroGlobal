<?php

require_once('../../class/DatosRestaurant.php');
$p = new DatosRestaurant();

$propietario = new Propietario($_POST['nombre_propietario'], $_POST['email_propietario'], $_POST['contraseña']);
$p->crear($propietario);

// header('Location: ../pagina_admin.php');