<?php
require_once('../../class/DatosRestaurant.php');

$p= new DatosRestaurant();

$restaurant=$p->eliminar($_POST['id']);

echo $restaurant;

?>