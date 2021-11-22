<?php
//este script se encargara de almacenar todos los datos que necesitamos para la pagina de un restaurant
//posteriormente los recibiremos mediante un Ajax en JS

require_once('../class/DatosRestaurant.php');
$r = new DatosRestaurant();
$id = $_GET['id'];
$restaurant = $r->leer($id);

$nombre = $restaurant->getNombre();
$foto = $restaurant->getFotos();
$descripcion = $restaurant->getDescripcion();
$horario = $restaurant->getDiasLaboran() . ' ' . $restaurant->getHorarioEntrada() . ' a ' . $restaurant->getHorarioSalida();
$direccion = $restaurant->getDireccion();
$telefono_contacto = $restaurant->getTelefono_contacto();
$especialidad = $restaurant->getEspecialidad();

$informacion = array($nombre, $foto, $descripcion, $horario, $direccion, $telefono_contacto, $especialidad);
echo json_encode($informacion);
