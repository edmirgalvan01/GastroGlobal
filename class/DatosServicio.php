<?php


require_once('Conexion.php');
require_once('Plantilla.php');
require_once('Servicio.php');

mysqli_report(MYSQLI_REPORT_ALL & ~MYSQLI_REPORT_INDEX);

class DatosServicio extends Conexion implements Plantilla
{

    private $sql_insertar = "INSERT INTO Servicios(nombre) VALUES(?)";
    private $sql_modificar = "UPDATE Servicios SET nombre=? WHERE id=?";
    private $sql_eliminar = "DELETE from Servicios WHERE id=?";
    private $sql_leer = "SELECT * FROM Servicios WHERE id=?";
    private $sql_leerTodo = "SELECT * FROM Servicios";
    private $conexion;


    public function __construct()
    {
        $this->conexion = $this->conectar();
    }

    public function crear($objeto)
    {
        try {
            $consulta = $this->conexion->prepare($this->sql_insertar);
            $consulta->bind_param('s', $objeto->getNombre());

            $resultado = $consulta->execute();
            return $resultado;
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
        }
    }

    public function modificar($objeto)
    {
        try {
            $consulta = $this->conexion->prepare($this->sql_modificar);
            $consulta->bind_param(
                'si',
                $objeto->getNombre(),
                $objeto->getId()
            );

            $resultado = $consulta->execute();
            return $resultado;
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
        }
    }

    public function eliminar($id)
    {
        try {
            $consulta = $this->conexion->prepare($this->sql_eliminar);
            $consulta->bind_param('i', $id);

            $resultado = $consulta->execute();
            return $resultado;
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
        }
    }

    public function leer($id)
    {
        $Servicio = null;
        try {
            $consulta = $this->conexion->prepare($this->sql_leer);
            $consulta->bind_param('i', $id);
            $consulta->execute();
            $resultado = $consulta->get_result();

            while ($fila = mysqli_fetch_array($resultado)) {
                $Servicio = new Servicio($fila[1]);
                $Servicio->setId($fila[0]);
            }
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
        }
        return $Servicio;
    }

    public function leerTodo()
    {
        $servicio = null;
        $servicios = array();

        try {
            $consulta = $this->conexion->prepare($this->sql_leerTodo);
            $consulta->execute();
            $resultado = $consulta->get_result();

            while ($fila = mysqli_fetch_array($resultado)) {
                $servicio = new Servicio($fila[1]);
                $servicio->setId($fila[0]);

                array_push($servicios, $servicio);
            }
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
        }

        return $servicios;
    }
}
