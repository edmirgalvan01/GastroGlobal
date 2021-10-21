<?php

class Restaurant {
    private $id;
    private $nombre;
    private $descripcion;
    private $telefono_contacto;
    private $direccion;
    private $id_propietario;

    public function __construct($nombre, $descripcion, $telefono_contacto, $direccion) {
        $this -> nombre = $nombre;
        $this -> descripcion = $descripcion;
        $this -> telefono_contacto = $telefono_contacto;
        $this -> direccion = $direccion;
    }

    public function setId($id) {
        $this -> $id;
    }

    public function getId() {
        return $this -> id;
    }

    public function setNombre($nombre) {
        $this -> $nombre;
    }

    public function getNombre() {
        return $this -> nombre;
    }
    
    public function setDescripcion($descripcion) {
        $this -> $descripcion;
    }

    public function getDescripcion() {
        return $this -> descripcion;
    }
    
    public function setTelefono_contacto($telefono_contacto) {
        $this -> $telefono_contacto;
    }

    public function getTelefono_contacto() {
        return $this -> telefono_contacto;
    }
    
    public function setDireccion($direccion) {
        $this -> $direccion;
    }

    public function getDireccion() {
        return $this -> direccion;
    }
    
    public function setId_propietario($id_propietario) {
        $this -> $id_propietario;
    }

    public function getId_propietario() {
        return $this -> id_propietario;
    }
}

?>