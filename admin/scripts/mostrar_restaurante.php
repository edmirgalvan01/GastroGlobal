<?php

require_once('../../class/DatosRestaurant.php');

$r = new DatosRestaurant();
$restaurantes = $r->leerTodo();
$cardRestaurant = "";

foreach ($restaurantes as $restaurant) {
    $cardRestaurant .= '
    <section class="card__restaurant">
        <img class="imagen" id="foto_'.$restaurant->getId().'"data-foto="'.$restaurant->getFotos().'" src="../img/' . $restaurant->getFotos() . '" alt="">
        <h1 class="titulo" id="nomb_1'.$restaurant->getId().'">'. $restaurant->getNombre() . '</h1>
        <p class="especialidad" id="especi_1'.$restaurant->getId().'">' . $restaurant->getEspecialidad() . '</p>
        <p class="descripcion" id="descrip_1'.$restaurant->getId().'">' . $restaurant->getDescripcion() . '</p>
        <button class="eliminar del" id="eliminar_b" data-id='.$restaurant->getId().' href="#" data-bs-toggle="modal" data-bs-target="#eliminar_m">Eliminar</button>
        <button class="editar edit"  id="editar_b" data-id='.$restaurant->getId().' data-bs-toggle="modal" data-bs-target="#editar_m">Editar</button>
    </section>
    ';
}

echo $cardRestaurant;
