<?php 
include('./config/conexion.php');

if(!empty($_POST['registro'])){
    if (empty($_POST['nombre']) or empty ($_POST['apellidop']) or empty ($_POST['apellidom']) or empty ($_POST['correo']) or empty ($_POST['matricula']) or empty ($_POST['telefono']) or empty ($_POST['clave']) or empty ($_POST['tipouser'])) {
       echo '<div class="alert alert-danger">Hay campos que estan vacios</div>';
    } else {
       $nombre=$_POST['nombre'];
     
       function RemoveSpecialChar($nombre)
{
    $res = preg_replace('/[0-9\@\!#$%&()=?¡¿{.\;\" "]+/', '', $nombre);
    return $res;
}
$nombrelimpio = RemoveSpecialChar($nombre);
       
       $apellidop=$_POST['apellidop'];
       function RemoveSpecialChar($apellidop)
{
    $res = preg_replace('/[0-9\@\!#$%&()=?¡¿{.\;\" "]+/', '', $apellidop);
    return $res;
}
$apellidoplimpio = RemoveSpecialChar($apellidop);

       $apellidom=$_POST['apellidom'];
       function RemoveSpecialChar($apellidom)
       {
           $res = preg_replace('/[0-9\@\!#$%&()=?¡¿{.\;\" "]+/', '', $apellidom);
           return $res;
       }
       $apellidomlimpio = RemoveSpecialChar($apellidom);

       $correo=$_POST['correo'];
       $matricula=$_POST['matricula'];
       $telefono=$_POST['telefono'];
       $clave=$_POST['clave'];
       $tipouser=$_POST['tipouser'];
       $sql=$conn->query(" INSERT INTO usuario VALUES('$matricula','$nombrelimpio','$apellidoplimpio','$apellidom','$telefono','$correo','$clave','$tipouser');");
   
        if ($sql==1) {
            echo '<div><h3 class="fw-bold mb-5">Te has registrado correctamente</h3></div>';
        } else {
            echo '<div><h3 class="fw-bold mb-5"error al registrar</h3></div>';
        }
    }
}
mysqli_close($conn);
?>



