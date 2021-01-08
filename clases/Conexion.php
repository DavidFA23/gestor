<?php 
class conectar{
    public function conexion(){
        $servidor = "localhost";
        $usuario = "root";
        $password = "";
        $baseDatos = "gestor";
        $port = 3307;
        $conexion = mysqli_connect($servidor, 
            $usuario, 
            $password, 
            $baseDatos,
        $port);
        return $conexion;
    }
}
?>