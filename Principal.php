<?php
 $user="root";
 $pass="";
 $server="localhost";
 $db="conexion";
 //CONEXION
 $conn=mysqli_connect($server,$user,$pass,$db);
 
 if(!$conn){
    die("Error al Conectar a la base de datos".mysqli_connect_error());
 }
 echo "conexion exitosa";
 mysqli_close($conn);


?>