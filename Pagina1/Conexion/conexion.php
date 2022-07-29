<?php 
 $user="root";
 $pass="";
$server="localhost";
$db="pruebas";

//conexion

$conn=mysqli_connect($server,$user,$pass,$db);
if(!$conn){
    die("No se establecio la conexion".mysqli_connect_error());
}
echo "conexion establecida";
mysqli_close($conn);


?>