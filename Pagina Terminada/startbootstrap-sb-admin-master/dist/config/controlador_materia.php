<?php 
include('/wamp64/www/Pagina/startbootstrap-sb-admin-master/dist/config/conexion.php');

if(!empty($_POST['insertar'])){
    if (empty($_POST['nombrema']) or empty ($_POST['descripcion'])) {
       echo '<div class="alert alert-danger">Hay campos que estan vacios</div>';
    } else {
       $nombrema=$_POST['nombrema'];
       $descripcionma=$_POST['descripcion'];
       $sql=$conn->query(" INSERT INTO materias (NombreM, Descripcion) VALUES ('$nombrema','$descripcionma');");
   
        if ($sql==1) {
            echo '<div><h3 class="fw-bold mb-5">Se ha registrado correctamente la materia</h3></div>';
        } else {
            echo '<div><h3 class="fw-bold mb-5"error al registrar</h3></div>';
        }
    }
}


?>



