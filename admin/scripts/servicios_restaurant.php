<?php

require_once('../../class/DatosServicio.php');
$datosServicios = new DatosServicio();
$datos = $datosServicios->leerTodo(); //devuelve un arreglo con todos los servicios
$servicios = "";
