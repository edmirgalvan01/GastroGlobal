<?php


require_once('conexion.php'); //cree una conexion ficticia para no me diera el error en visual code// 
require_once('Plantilla.php'); 
require_once('Propietario.php');

mysqli_report(MYSQLI_REPORT_ALL & ~MYSQLI_REPORT_INDEX);

class PropietarioDatos extends Conexion implements Plantilla{

    private $sql_insertar="INSERT INTO Propietarios(nombre,email,password)
                                      values(?,?,?,?)";
    private $sql_modificar="UPDATE Propietarios SET nombre=?,email=?,password=? WHERE id=?";
    private $sql_eliminar="DELETE from Propietarios WHERE id=?";
    private $sql_leer="SELECT * FROM Propietarios WHERE id=?";
    private $sql_leerTodo="SELECT * FROM Propietarios";
    private $sql_buscar="SELECT * FROM Propietarios WHERE nombre LIKE ?";
    private $conexion;


    public function __construct(){
        $this->conexion=$this->conectar();
    }

    public function crear($objeto){
        try {
            $consulta=$this->conexion->prepare($this->sql_insertar);
            $consulta->bind_param('sss',$objeto->getNombre(),$objeto->getEmail(),$objeto->getPassword());

            $resultado=$consulta->execute();
            return $resultado;

        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
        }
    } 

    public function modificar($objeto){
        try {
            $consulta=$this->conexion->prepare($this->sql_modificar);
            $consulta->bind_param('sssi',$objeto->getNombre(),$objeto->getEmail(),$objeto->getPassword(),$objeto->getId());
            
            $resultado=$consulta->execute();
            return $resultado;
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
            
        }
    }

    public function eliminar($id){
            try {
                $consulta=$this->conexion->prepare($this->sql_eliminar);
                $consulta->bind_param('i',$id);
                
                $resultado=$consulta->execute();
                return $resultado;
            } catch (mysqli_sql_exception $e){
                echo $e->getMessage();       
            }
    }

    public function leer($id){
        $Propietario=null;

        try {
            $consulta=$this->conexion->prepare($this->sql_leer);
            $consulta->bind_param('i',$valor);
            $consulta->execute();
            $resultado=$consulta->get_result();

            while($fila=mysqli_fetch_array($resultado)){
                $Propietario=new Propietario($fila[1],$fila[2],$fila[3]); 
                $Propietario->setId($fila[0]);
            }
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();  
        }
        
        return $Propietario;
    }

    public function leerTodo(){
        $propietario=null;
        $propietarios=array();

        try {
            
            $consulta=$this->conexion->prepare($this->sql_leerTodo);
            $consulta->execute();
            $resultado=$consulta->get_result();

            while($fila=mysqli_fetch_array($resultado)){
                $propietario=new Propietario($fila[1],$fila[2],$fila[3]);
                $propietario->setId($fila[0]);

                array_push($propietarios,$propietario);
            }
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();         
        }
        
        return $propietarios;

    }
}
