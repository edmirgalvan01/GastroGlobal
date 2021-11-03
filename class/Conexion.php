<?php

mysqli_report(MYSQLI_REPORT_ALL);

class Conexion
{
    private $user = "root";
    private $password = "pinocho8";
    private $dbName = "gastroglobal";
    private $server = "localhost";
    private $conexion;

    public function __construct()
    {
        $this->conectar();
        $this->desconectar();
    }

    public function conectar()
    {
        try {
            //Conectamos a base de datos
            $this->conexion = new mysqli($this->server, $this->user, $this->password, $this->dbName);
            // if (!$this->conexion->connect_errno) {
            //     echo "Conectado";
            // }
        } catch (mysqli_sql_exception $error) {
            echo "Ha ocurrido un error: " . $error->getCode();
            echo "<br> Mensaje de error: " . $error->getMessage();
        }

        return $this->conexion;
    }

    public function desconectar()
    {
        //Cerramos conexion a base de datos
        $this->conexion->close();
    }
}
