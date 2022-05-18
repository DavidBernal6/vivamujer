<?php
//Configuración para acceder a BD
function conn(){
    $hostname= "localhost";
    $usuariodb= "root";
    $passworddb="";
    $dbname="vivamujer";
    
    //Generando la conexion con el servidor
    $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
    return $conectar;
}

?>