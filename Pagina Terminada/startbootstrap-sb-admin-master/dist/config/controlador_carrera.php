<?php 
include('/wamp64/www/Pagina/startbootstrap-sb-admin-master/dist/config/conexion.php');

if(!empty($_POST['insertar'])){
    if (empty($_POST['nombreca']) or empty ($_POST['descripcion'])) {
       echo '<div class="alert alert-danger">Hay campos que estan vacios</div>';
    } else {
       $nombreca=$_POST['nombreca'];
       $descripcionca=$_POST['descripcion'];
       $sql=$conn->query(" INSERT INTO carrera (NombreC, Descripcion) VALUES ('$nombreca','$descripcionca');");
   
        if ($sql==1) {
            echo '<div><h3 class="fw-bold mb-5">Se ha registrado correctamente la carrera</h3></div>';
        } else {
            echo '<div><h3 class="fw-bold mb-5"error al registrar</h3></div>';
        }
    }
}


?>



