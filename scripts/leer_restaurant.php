<?php
//este script se encargara de almacenar todos los datos que necesitamos para la pagina de un restaurant
//posteriormente los recibiremos mediante un Ajax en JS

require_once('../class/DatosRestaurant.php');
$r = new DatosRestaurant();
$restaurant = $r->leer(26); //TODO: Recibir ID adaptable a cada restaurant

echo $restaurant;
