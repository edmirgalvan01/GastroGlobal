<?php

class Restaurant
{
    private $id;
    private $nombre;
    private $descripcion;
    private $telefono_contacto;
    private $direccion;
    private $id_propietario;
    private $fotos;
    private $email;
    private $horario_entrada;
    private $horario_salida;
    private $especialidad;
    private $dias_laboran;

    public function __construct($nombre, $descripcion, $telefono_contacto, $direccion, $id_propietario, $fotos, $email, $horario_entrada, $horario_salida, $especialidad, $dias_laboran)
    {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->telefono_contacto = $telefono_contacto;
        $this->direccion = $direccion;
        $this->id_propietario = $id_propietario;
        $this->fotos = $fotos;
        $this->email = $email;
        $this->horario_entrada = $horario_entrada;
        $this->horario_salida = $horario_salida;
        $this->especialidad = $especialidad;
        $this->dias_laboran = $dias_laboran;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNombre($nombre)
    {
        $this->$nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setDescripcion($descripcion)
    {
        $this->$descripcion;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setTelefono_contacto($telefono_contacto)
    {
        $this->$telefono_contacto;
    }

    public function getTelefono_contacto()
    {
        return $this->telefono_contacto;
    }

    public function setDireccion($direccion)
    {
        $this->$direccion;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setIdPropietario($id_propietario)
    {
        $this->$id_propietario;
    }

    public function getIdPropietario()
    {
        return $this->id_propietario;
    }

    public function setFotos($fotos)
    {
        $this->$fotos;
    }

    public function getFotos()
    {
        return $this->fotos;
    }

    public function setEmail($email)
    {
        $this->$email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setHorarioEntrada($horario_entrada)
    {
        $this->$horario_entrada;
    }

    public function getHorarioEntrada()
    {
        return $this->horario_entrada;
    }

    public function setHorarioSalida($horario_salida)
    {
        $this->$horario_salida;
    }

    public function getHorarioSalida()
    {
        return $this->horario_salida;
    }

    public function setEspecialidad($especialidad)
    {
        $this->$especialidad;
    }

    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    public function setDiasLaboran($dias_laboran)
    {
        $this->$dias_laboran;
    }

    public function getDiasLaboran()
    {
        return $this->dias_laboran;
    }
}
