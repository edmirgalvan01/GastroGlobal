<?php


require_once('conexion.php');
require_once('Plantilla.php');
require_once('Usuario.php');

mysqli_report(MYSQLI_REPORT_ALL & ~MYSQLI_REPORT_INDEX);

class UsuarioDatos extends Conexion implements Plantilla
{

    private $sql_insertar = "INSERT INTO Usuarios(nombre,password,email) VALUES(?,?,?)";
    private $sql_modificar = "UPDATE Usuarios SET nombre=?,email=?,password=? WHERE id=?";
    private $sql_eliminar = "DELETE from Usuarios WHERE id=?";
    private $sql_leer = "SELECT * FROM Usuarios WHERE id=?";
    private $sql_leerTodo = "SELECT * FROM Usuarios";
    private $sql_buscar = "SELECT * FROM Usuarios WHERE nombre LIKE ?";
    private $conexion;

    public function __construct()
    {
        $this->conexion = $this->conectar();
    }

    public function crear($objeto)
    {
        try {
            $consulta = $this->conexion->prepare($this->sql_insertar);
            $consulta->bind_param('sss', $objeto->getNombre(), $objeto->getPassword(), $objeto->getEmail());

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
            $consulta->bind_param('sssi', $objeto->getNombre(), $objeto->getPassword(), $objeto->getEmail(), $objeto->getId());

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
        $Usuarios = null;
        try {
            $consulta = $this->conexion->prepare($this->sql_leer);
            $consulta->bind_param('i', $id);
            $consulta->execute();
            $resultado = $consulta->get_result();

            while ($fila = mysqli_fetch_array($resultado)) {
                $Usuarios = new Usuario($fila[1], $fila[2], $fila[3]);
                $Usuarios->setId($fila[0]);
            }
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
        }

        return $Usuarios;
    }

    public function leerTodo()
    {
        $usuario = null;
        $usuarios = array();

        try {

            $consulta = $this->conex->prepare($this->sql_leerTodo);
            $consulta->execute();
            $resultado = $consulta->get_result();

            while ($fila = mysqli_fetch_array($resultado)) {
                $usuario = new Usuario($fila[1], $fila[2], $fila[3]);
                $usuario->setId($fila[0]);

                array_push($usuarios, $usuario);
            }
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
        }

        return $usuarios;
    }
    public function login($password, $email)
    {

        $Usuarios = null;

        try {
            $consulta = $this->conex->prepare($this->sql_login);
            $consulta->bind_param('ss', $email, $password);
            $consulta->execute();
            $resultado = $consulta->get_result();

            while ($fila = mysqli_fetch_array($resultado)) {
                $Usuarios = new Usuario($fila[1], $fila[2], $fila[3]);
                $Usuarios->setId($fila[0]);
            }
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
        }

        return $Usuarios;
    }
}
