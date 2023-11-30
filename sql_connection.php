<?php
function Conexion(){
    
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $db = "pibd";
    
    $conexion=mysqli_connect($servername, $username, $pass, $db);
    
    if($conexion){
        //echo "Base de datos conectada con exito";
        return $conexion;
    }else{
        echo "No se pudo establecer la conexión con la base de datos";
    }
}
?>
