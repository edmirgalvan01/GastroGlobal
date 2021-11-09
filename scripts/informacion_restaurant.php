<?php

require_once('../class/DatosRestaurant.php');
$r = new DatosRestaurant();
$restaurant = $r->leerTodo();
