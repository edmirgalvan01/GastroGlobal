<?php

require_once('../../class/DatosRestaurant.php');

$r = new DatosRestaurant();
$restaurantes = $r->leerTodo();
$cardRestaurant = "";

foreach ($restaurantes as $restaurant) {
    $cardRestaurant .= '
    <section class="card__restaurant">
        <img class="imagen" src="../img/' . $restaurant->getFotos() . '" alt="">
        <h1 class="titulo">' . $restaurant->getNombre() . '</h1>
        <p class="especialidad">' . $restaurant->getEspecialidad() . '</p>
        <p class="descripcion">' . $restaurant->getDescripcion() . '</p>
        <button class="eliminar" id="eliminar_b" href="#" data-bs-toggle="modal" data-bs-target="#eliminar_m">Eliminar</button>
        <button class="editar" id="editar_b" data-bs-toggle="modal" data-bs-target="#editar_m">Editar</button>
    </section>
    ';
}

echo $cardRestaurant;
