<?php

require_once('../../class/DatosRestaurant.php');

$r = new DatosRestaurant();

$valor = "%" . $_POST['buscar'] . "%";
$restaurantes = $r->buscar($valor);
$resultados = '';

foreach ($restaurantes as $restaurant) {
    $resultados .= '
    <a id="' . $restaurant->getId() . '" href="#" class="results__item">
        <img src="./img/' . $restaurant->getFotos() . '" class="results__item--img" alt="' . $restaurant->getNombre() . '">
        <p class="results__item--name">' . $restaurant->getNombre() . '</p>
    </a>
    ';
}

echo $resultados;
