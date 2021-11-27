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
        <button class="eliminar">Eliminar</button>
        <button class="editar">Editar</button>
    </section>
    ';
}

echo $cardRestaurant;
