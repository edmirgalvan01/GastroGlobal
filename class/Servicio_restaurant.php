<?php

class Servicio_restaurant {
    private $id_servicio;
    private $id_restaurant;

    public function __construct(){} //TODO: Preguntar sobre constructor vacio

    public function setId_servicio($id_servicio) {
        $this -> id_servicio = $id_servicio;
    }
    
    public function getId_servicio() {
        return $this -> id_servicio;
    }
    
    public function setId_restaurant($id_restaurant) {
        $this -> id_restaurant = $id_restaurant;
    }
    
    public function getId_restaurant() {
        return $this -> id_restaurant;
    }
}

?>