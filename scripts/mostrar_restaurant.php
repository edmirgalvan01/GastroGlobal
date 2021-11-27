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
            <a href="#">Conoce mas</a>
        </div>
    </article>
    ';
}

echo $cardRestaurant;
