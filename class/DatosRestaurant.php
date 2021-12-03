<?php

require_once('Conexion.php');
require_once('Plantilla.php');
require_once('Restaurant.php');

mysqli_report(MYSQLI_REPORT_ALL & MYSQLI_REPORT_ALL & ~MYSQLI_REPORT_INDEX);

class DatosRestaurant extends Conexion implements Plantilla
{
    private $sqlCrear = "INSERT INTO restaurantes(nombre, descripcion, telefono_contacto, direccion, id_propietario, fotos, email, horario_entrada, horario_salida, especialidad, dias_laboran) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    private $sqlModificar = "UPDATE restaurantes SET nombre = ?, descripcion = ? , direccion = ?, fotos = ?
                            WHERE id = ?";
    private $sqlEliminar = "DELETE FROM restaurantes WHERE id = ?";
    private $sqlLeerTodo = "SELECT * FROM restaurantes";
    private $sqlLeer = "SELECT * FROM restaurantes WHERE id = ?";
    private $sqlBuscar = "SELECT * FROM restaurantes WHERE nombre LIKE ?";
    private $conexion;

    public function __construct()
    {
        $this->conexion = $this->conectar();
    }

    public function crear($objeto)
    {
        try {
            $consulta = $this->conexion->prepare($this->sqlCrear);
            $consulta->bind_param(
                'ssisissssss',
                $objeto->getNombre(),
                $objeto->getDescripcion(),
                $objeto->getTelefono_contacto(),
                $objeto->getDireccion(),
                $objeto->getIdPropietario(),
                $objeto->getFotos(),
                $objeto->getEmail(),
                $objeto->getHorarioEntrada(),
                $objeto->getHorarioSalida(),
                $objeto->getEspecialidad(),
                $objeto->getDiasLaboran(),
            );
            $resultado = $consulta->execute();
            return $resultado;
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
        } finally {
            $this->desconectar();
        }
    }
    public function modificar($objeto)
    {
        try {
            $consulta = $this->conexion->prepare($this->sqlModificar);
            $consulta->bind_param(
                'sssss',
                $objeto->getNombre(),
                $objeto->getDescripcion(),
                $objeto->getDireccion(),
                $objeto->getFotos(),
                $objeto->getId(),
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
            $consulta = $this->conexion->prepare($this->sqlEliminar);
            $consulta->bind_param('i', $id);
            $resultado = $consulta->execute();
            return $resultado;
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
        }
    }
    public function leerTodo()
    {
        $restaurant = null;
        $restaurantes = array();

        try {
            $consulta = $this->conexion->prepare($this->sqlLeerTodo);
            $consulta->execute();
            $resultado = $consulta->get_result();

            while ($fila = mysqli_fetch_array($resultado)) {
                $restaurant = new Restaurant(
                    $fila[1],
                    $fila[2],
                    $fila[3],
                    $fila[4],
                    $fila[5],
                    $fila[6],
                    $fila[7],
                    $fila[8],
                    $fila[9],
                    $fila[10],
                    $fila[11],
                );
                $restaurant->setId($fila[0]);
                array_push($restaurantes, $restaurant);
            }
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
        }

        return $restaurantes;
    }
    public function leer($id)
    {
        $restaurant = null;

        try {
            $consulta = $this->conexion->prepare($this->sqlLeer);
            $consulta->bind_param('i', $id);
            $consulta->execute();
            $resultado = $consulta->get_result();

            while ($fila = mysqli_fetch_array($resultado)) {
                $restaurant = new Restaurant(
                    $fila[1],
                    $fila[2],
                    $fila[3],
                    $fila[4],
                    $fila[5],
                    $fila[6],
                    $fila[7],
                    $fila[8],
                    $fila[9],
                    $fila[10],
                    $fila[11],
                );
                $restaurant->setId($fila[0]);
            }
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
        }
        return $restaurant;
    }
    public function buscar($valor)
    {
        $restaurant = null;
        $restaurantes = array();

        try {
            $consulta = $this->conexion->prepare($this->sqlBuscar);
            $consulta->bind_param('s', $valor);
            $consulta->execute();
            $resultado = $consulta->get_result();

            while ($fila = mysqli_fetch_array($resultado)) {
                $restaurant = new Restaurant(
                    $fila[1],
                    $fila[2],
                    $fila[3],
                    $fila[4],
                    $fila[5],
                    $fila[6],
                    $fila[7],
                    $fila[8],
                    $fila[9],
                    $fila[10],
                    $fila[11],
                );
                $restaurant->setId($fila[0]);
                array_push($restaurantes, $restaurant);
            }
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
        }

        return $restaurantes;
    }
}
