<?php

require_once('../../class/DatosPropietario.php');
$datosPropietario = new DatosPropietario();
$datos = $datosPropietario->leerTodo();
$propietarios = "";

foreach ($datos as $propietario) {
    $propietarios = $propietarios . "<option value='" . $propietario->getId() . "'>" . $propietario->getNombre() . "</option>";
}

echo $propietarios;
