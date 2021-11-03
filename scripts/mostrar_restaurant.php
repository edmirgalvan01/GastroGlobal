<?php

require_once('../class/DatosRestaurant.php');

$r = new DatosRestaurant();
$restaurantes = $r->leerTodo();
$cardRestaurant = "";

foreach ($restaurantes as $restaurant) {
    $cardRestaurant .= '
    <div class="col-sm">
        <div class="card w-100 card-border mb-5">
            <img src="./img/' . $restaurant->getFotos() . '" class="card-img-top" alt="' . $restaurant->getNombre() . '">
            <div class="card-body">
                <h5 class="card-title">' . $restaurant->getNombre() . '</h5>
                <p class="card-text">' . $restaurant->getEspecialidad() . '</p>
                <a href="#" data-id="' . $restaurant->getId() . '" class="btn btn-warning">Mas informacion</a>
            </div>
        </div>
    </div>
    ';
}

echo $cardRestaurant;
