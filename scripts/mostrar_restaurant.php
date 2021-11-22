<?php

require_once('../class/DatosRestaurant.php');

$r = new DatosRestaurant();
$restaurantes = $r->leerTodo();
$cardRestaurant = "";

foreach ($restaurantes as $restaurant) {
    $cardRestaurant .= '
    <article class="card">
        <img src="./img/' . $restaurant->getFotos() . '" class="card__img" alt="' . $restaurant->getNombre() . '">
        <div class="card__information">
            <h3>' . $restaurant->getNombre() . '</h3>
            <p>' . $restaurant->getEspecialidad() . '</p>
            <a class="id_restaurant" data-id="' . $restaurant->getId() . '" href="./restaurantes/restaurant.php?id=' . $restaurant->getId() . '">Conoce mas</a>
        </div>
    </article>
    ';
}

echo $cardRestaurant;
