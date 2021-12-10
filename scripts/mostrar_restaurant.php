<?php

require_once('../class/DatosRestaurant.php');

$r = new DatosRestaurant();
$restaurantes = $r->leerTodo();
$cardRestaurant = "";

foreach ($restaurantes as $restaurant) {
    $cardRestaurant .= '
    <article class="card__r">
        <img src="./img/' . $restaurant->getFotos() . '" class="card__img" alt="' . $restaurant->getNombre() . '">
        <div class="card__information">
            <h3>' . $restaurant->getNombre() . '</h3>
            <p>' . $restaurant->getEspecialidad() . '</p>
            <a href="" data-id="' . $restaurant->getId() . '" data-bs-toggle="modal" data-bs-target="#detalles_restaurante" class="detalles">Conoce mas</a>
            <a href="" class="detalles__r--mobile" data-id="' . $restaurant->getId() . '" data-bs-toggle="modal" data-bs-target="#detalles_restaurante" class="detalles">i</a>
        </div>
    </article>
    ';
}

echo $cardRestaurant;
