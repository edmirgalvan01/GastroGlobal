<?php

require_once('../../class/DatosPropietario.php');
$p = new DatosPropietario();

$propietario = new Propietario($_POST['nombre_propietario'], $_POST['email_propietario'], $_POST['contraseña']);
$p->crear($propietario);
