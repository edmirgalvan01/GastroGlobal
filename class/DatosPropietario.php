<?php


require_once('conexion.php'); //cree una conexion ficticia para no me diera el error en visual code// 
require_once('Plantilla.php'); 
require_once('Propietarios.php');

mysqli_report(MYSQLI_REPORT_ALL & ~MYSQLI_REPORT_INDEX);

class PropietarioDatos extends Conexion implements Plantilla{

    private $sql_insertar="INSERT INTO Propietario(id,nombre,email,password)
                                      values(?,?,?,?)";
    private $sql_modificar="UPDATE Propietario SET nombre=?,email=?,password=?
                             WHERE id=?";
    private $sql_eliminar="DELETE from Propietario WHERE id=?";
    private $sql_leer="SELECT * FROM Propietario WHERE id=?";
    private $sql_leerTodo="SELECT * FROM Propietario";
    private $sql_buscar="SELECT * FROM Propietario WHERE nombre LIKE ?";
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

        $Propietarios=null;
        try {
            $consulta=$this->conexion->prepare($this->sql_leer);
            $consulta->bind_param('i',$valor);
            $consulta->execute();
            $resultado=$consulta->get_result();

            while($fila=mysqli_fetch_array($resultado)){
                $Propietarios=new Propietario($fila[1],$fila[2],$fila[3],$fila[4]); // El visual code no me dejaba poner 3 filas sabiendo que son 4 y se cuenta la fila 0 pero estoy trabajando en arreglar ese aspecto//
                $Propietarios->setId($fila[0]);
            }





        }catch (mysqli_sql_exception $e) {
                echo $e->getMessage();
                
            }

            return $Propietarios;

    }

    public function leerTodo(){
        $Propietario1=null;
        $Propietario2=array();

        try {
            
            $consulta=$this->conexion->prepare($this->sql_leerTodo);
            $consulta->execute();
            $resultado=$consulta->get_result();

            while($fila=mysqli_fetch_array($resultado)){
                $Propietario1=new Propietario($fila[1],$fila[2],$fila[3],$fila[4]);
                $Propietario1->setId($fila[0]);

                array_push($Propietario2,$Propietario1);
            }

        }catch (mysqli_sql_exception $e) {
                echo $e->getMessage();
                
            }

            return $Propietario2;

    }

    public function buscar($valor){
        $Propietario1=null;
        $Propietario2=array();

        try {
            $consulta=$this->conexion->prepare($this->sql_buscar);
            $consulta->bind_param('s',$valor);
            $consulta->execute();
            $resultado=$consulta->get_result();

            while($fila=mysqli_fetch_array($resultado)){
                $Propietario1=new Propietario($fila[1],$fila[2],$fila[3],$fila[4]);
                $Propietario1->setId($fila[0]);

                array_push($Propietario2,$Propietario1);
            }
        }catch (mysqli_sql_exception $e) {
                echo $e->getMessage();
                
            }

    }
 
 // me falta la tabla login// 
 
}
