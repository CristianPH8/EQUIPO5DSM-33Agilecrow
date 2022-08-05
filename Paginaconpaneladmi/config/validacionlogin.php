<?php
include('./config/conexion.php');


if (!empty($_POST['ingresar']) ) {
    if (empty($_POST['correo']) and empty($_POST['clave1'])) {
        echo'<div class="alert alert-danger">Los campos estan vacios</div>';
    } else {
       $correo=$_POST['correo'];
       $clave1=$_POST['clave1'];
       $sql=$conn->query(" SELECT * FROM usuario WHERE corre='$correo' and contraseña='$clave1'");
       if ($datos=$sql->fetch_object()) {
        header("location:Usario.php");
       } else {
        echo('<div class="alert alert-danger">Error de autentificacion</div>');
       }
       
    }
    
}


mysqli_close($conn);







?>