<?php


require_once('conexion.php');
require_once('Plantilla.php');
require_once('Usuarios.php');

mysqli_report(MYSQLI_REPORT_ALL & ~MYSQLI_REPORT_INDEX);

class UsuarioDatos extends Conexion implements Plantilla{

    private $sql_insertar="INSERT INTO Usuarios(id,nombre,password,email)
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
            $consulta->bind_param('sss',$objeto->getNombre(),$objeto->getPassword(),$objeto->getEmail());


            $resultado=$consulta->execute();
            return $resultado;

        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
        }finally{
            $this->conexion->close();
        }
    } 

    public function modificar($objeto){

        try {
            $consulta=$this->conexion->prepare($this->sql_modificar);
            $consulta->bind_param('sssi',$objeto->getNombre(),$objeto->getPassword(),$objeto->getEmail(),$objeto->getId());
            
            $resultado=$consulta->execute();
            return $resultado;
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
            
        }finally{
            $this->conexion->close();
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
                
            }finally{
                $this->conexion->close();
            }
    }

    public function leer($id){
        $Usuarios=null;
        try {
            $consulta=$this->conexion->prepare($this->sql_leer);
            $consulta->bind_param('i',$valor);
            $consulta->execute();
            $resultado=$consulta->get_result();

            while($fila=mysqli_fetch_array($resultado)){
                $Usuarios=new Usuario($fila[1],$fila[2],$fila[3],$fila[4]); // error son 3 columnas pero visual code lo pone como 4// 
                $Usuarios->setId($fila[0]);
            }





        }catch (mysqli_sql_exception $e) {
                echo $e->getMessage();
                
            }finally{
                $this->conexion->close();
            
            }

            return $Usuarios;

    }

    public function leerTodo(){
        $Usuario1=null;
        $Usuario2=array();

        try {
            
            $consulta=$this->conex->prepare($this->sql_leerTodo);
            $consulta->execute();
            $resultado=$consulta->get_result();

            while($fila=mysqli_fetch_array($resultado)){
                $Usuario1=new Usuario($fila[1],$fila[2],$fila[3],$fila[4]);
                $Usuario1->setId($fila[0]);

                array_push($Usuario2,$Usuario1);
            }

        }catch (mysqli_sql_exception $e) {
                echo $e->getMessage();
                
            }finally{
                $this->conex->close();
            
            }

            return $Usuario2;

    }

    public function buscar($valor){
        $Usuario1=null;
        $Usuario2=array();

        try {
            $consulta=$this->conex->prepare($this->sql_buscar);
            $consulta->bind_param('s',$valor);
            $consulta->execute();
            $resultado=$consulta->get_result();

            while($fila=mysqli_fetch_array($resultado)){
                $Usuario1=new Usuario($fila[1],$fila[2],$fila[3],$fila[4]);
                $Usuario1->setId($fila[0]);

                array_push($Usuario2,$Usuario1);
            }
        }catch (mysqli_sql_exception $e) {
                echo $e->getMessage();
                
            }finally{
                $this->conex->close();
            
            }

    }
    public function login($password,$email){

        $Usuarios=null;

        try {
            $consulta=$this->conex->prepare($this->sql_login);
            $consulta->bind_param('ss',$email,$password);
            $consulta->execute();
            $resultado=$consulta->get_result();

            while($fila=mysqli_fetch_array($resultado)){
                $Usuarios=new Usuario($fila[1],$fila[2],$fila[3],$fila[4]);
                $Usuarios->setId($fila[0]);
            }
        } catch (mysqli_sql_exception $e) {
                echo $e->getMessage();
                
          }finally {
                $this->conex->close();
            
        }

        return $Usuarios;
    }

}
