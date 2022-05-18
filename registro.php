<?php
include_once ('db.php');
//Recibo todos los datos del formulario
$usuario=$_POST['usuario'];
$correo=$_POST['correo'];
$password=$_POST['password'];

echo "$usuario <br>";
echo "$correo <br>";
echo "$password <br>";

        $conectar=conn();//ejecuta la conexiones a la bd
        $sql="INSERT INTO registros (usuario, correo, contraseña)
        VALUES ('$usuario', '$correo', '$password')";
        $resul = mysqli_query($conectar , $sql)or trigger_error("Query Failed! SQL- Error: ".mysqli_error($conectar));

echo"$sql";
?>