<?php

require_once('../../class/DatosServicio.php');
$datosServicios = new DatosServicio();
$datos = $datosServicios->leerTodo(); //devuelve un arreglo con todos los servicios
$servicios = "";

foreach ($datos as $servicio) {
    //por cada servicio en BBDD me devuelve un elemento option
    $servicios = $servicios . "<option value='" . $servicio->getId() . "'>" . $servicio->getNombre() . "</option>";
}

echo $servicios;
