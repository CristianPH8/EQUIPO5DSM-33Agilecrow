<?php 
include('./config/conexion.php');

    if (!empty($_POST['nombre'])&& !empty ($_POST['apellidop'])&& !empty ($_POST['apellidom'])&& !empty ($_POST['correo'])&& !empty ($_POST['matricula'])&& !empty($_POST['telefono'])&& !empty ($_POST['clave']) ) {
        $nombre=$_POST['nombre'];
       $apellidop=$_POST['apellidop'];
       $apellidom=$_POST['apellidom'];
       $correo=$_POST['correo'];
       $matricula=$_POST['matricula'];
       $telefono=$_POST['telefono'];
       $clave=$_POST['clave'];
        $sql = ("insert into usuario(matricula,nombreu,ap,am,correo,telefono,contraseña)values('$matricula','$nombre','$apellidop',' $apellidom','$correo',' $telefono','$clave') ");
        $stmt = $conn->prepare($sql);
    }
    
mysqli_close($conn);

?>



