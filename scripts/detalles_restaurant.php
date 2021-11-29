<?php
require_once('../class/DatosRestaurant.php');
$r = new DatosRestaurant();
$restaurant = $r->leer($_POST['id']);

$horario = $restaurant->getDiasLaboran() . " de " . $restaurant->getHorarioEntrada() . " a " . $restaurant->getHorarioSalida();
$datos = '
        <h1 class="modal__titulo">' . $restaurant->getNombre() . '</h1>
        <h3>' . $restaurant->getEspecialidad() . '</h3>
        <img src="./img/' . $restaurant->getFotos() . '" class="modal__img">
        <p class="modal__item">' . $restaurant->getDescripcion() . '</p>
        <p class="modal__item">' . $restaurant->getDireccion() . '</p>
        <p class="modal__item">' . $horario . '</p>
        <p class="modal__item">' . $restaurant->getTelefono_contacto() . '</p>
    ';


echo $datos;
