<?php

function Conexion(){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pibd";

    $conexion=mysqli_connect($servername, $username, $pass, $db);

    if($conexion){
        echo "Base de datos conectada con exito";
    }else{
        echo "No se pudo establecer la conexión con la base de datos";
    }
}
?>
