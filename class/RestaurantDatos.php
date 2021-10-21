<?php

require_once('Conexion.php');
require_once('Plantilla.php');
require_once('Restaurant.php');

mysqli_report(MYSQLI_REPORT_ALL & MYSQLI_REPORT_ALL & ~MYSQLI_REPORT_INDEX);

class RestaurantDatos extends Conexion implements Plantilla {
    private $sqlCrear = "INSERT INTO restaurantes(nombre, descripcion, telefono_contacto, direccion, fotos) 
                            VALUES (?, ?, ?, ?, ?)";
    private $sqlModificar = "UPDATE restaurantes SET nombre = ?, descripcion = ? telefono_contacto = ?, direccion = ?, fotos = ?
                            WHERE id = ?";
    private $sqlEliminar = "DELETE FROM restaurantes WHERE id = ?";
    private $sqlLeerTodo = "SELECT * FROM restaurantes";
    private $sqlLeer = "SELECT * FROM restaurantes WHERE id = ?";
    private $sqlBuscar = "SELECT * FROM restaurantes WHERE nombre LIKE ?"; 
    private $conexion;

    public function __construct() {
        $this -> conexion = $this -> conectar();
    }

    public function crear($objeto) {
        try {
            $consulta = $this -> conexion -> prepare($this -> sqlCrear);
            $consulta -> bind_param('ssiss',
                $objeto -> getNombre(),
                $objeto -> getDescripcion(),
                $objeto -> getTelefono_contacto(),
                $objeto -> getDireccion(),
                $objeto -> getFotos(),
            );
            $resultado = $consulta -> execute();
            return $resultado;
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
        } finally {
            $this -> desconectar();
        }
    }
    public function modificar($objeto) {}
    public function eliminar($id) {}
    public function leerTodo() {}
    public function leer($id) {}
}

?>