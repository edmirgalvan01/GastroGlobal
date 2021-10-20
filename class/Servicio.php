<?php

class Servicio {
    private $id;
    private $nombre;
    private $logo;

    public function __construct($nombre, $logo) {
        $this -> nombre = $nombre;
        $this -> logo = $logo;
    }

    public function setId($id) {
        $this -> id = $id;
    }
    
    public function getId() {
        return $this -> id; 
    }
    
    public function setNombre($nombre) {
        $this -> nombre = $nombre;
    }
    
    public function getNombre() {
        return $this -> nombre; 
    }
    
    public function setLogo($logo) {
        $this -> logo = $logo;
    }
    
    public function getLogo() {
        return $this -> logo; 
    }
}

?>