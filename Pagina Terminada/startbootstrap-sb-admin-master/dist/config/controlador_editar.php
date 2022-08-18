<?php 
include('/wamp64/www/Pagina/startbootstrap-sb-admin-master/dist/config/conexion.php');

if(!empty($_POST['modificar'])){
    if (empty($_POST['nombre']) or empty ($_POST['apellidop']) or empty ($_POST['apellidom']) or empty ($_POST['correo']) or empty ($_POST['matricula']) or empty ($_POST['telefono']) or empty ($_POST['clave']) or empty ($_POST['tipouser'])) {
       echo '<div class="alert alert-danger">Hay campos que estan vacios</div>';
    } else {
       $nombre=$_POST['nombre'];
       $matricula2=$_POST['matricula2'];
       $apellidop=$_POST['apellidop'];
       $apellidom=$_POST['apellidom'];
       $correo=$_POST['correo'];
       $matricula=$_POST['matricula'];
       $telefono=$_POST['telefono'];
       $clave=$_POST['clave'];
       $tipouser=$_POST['tipouser'];
       $sql=$conn->query(" UPDATE usuario SET Matricula='$matricula', Nombre='$nombre', Ap='$apellidop', Am='$apellidom', Telefono='$telefono', Correo='$correo', Contraseña='$clave', Tipo='$tipouser' WHERE Matricula='$matricula2' ;");
   
        if ($sql==1) {
            echo '<div><h3 class="fw-bold mb-5">Ha editado correctamente</h3></div>';
        } else {
            echo '<div><h3 class="fw-bold mb-5"error al editar</h3></div>';
        }
    }
}


?>



