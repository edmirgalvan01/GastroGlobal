<?php

class Opinion {
    private $id;
    private $id_usuario;
    private $fecha;
    private $contenido;
    private $id_restaurant;

    public function __construct($fecha, $contenido) {
        $this -> fecha = $fecha;
        $this -> contenido = $contenido;
    }

    public function setId($id) {
        $this -> id = $id;
    }

    public function getId() {
        return $this -> id;
    }
    
    public function setId_usuario($id_usuario) {
        $this -> id_usuario = $id_usuario;
    }

    public function getId_usuario() {
        return $this -> id_usuario;
    }
    
    public function setFecha($fecha) {
        $this -> fecha = $fecha;
    }

    public function getFecha() {
        return $this -> fecha;
    }
    
    public function setContenido($contenido) {
        $this -> contenido = $contenido;
    }

    public function getContenido() {
        return $this -> contenido;
    }
    
    public function setId_restaurant($id_restaurant) {
        $this -> id_restaurant = $id_restaurant;
    }

    public function getId_restaurant() {
        return $this -> id_restaurant;
    }
}

?>