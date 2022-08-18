<?php 
include('/wamp64/www/Pagina/startbootstrap-sb-admin-master/dist/config/conexion.php');

if(!empty($_POST['insertar'])){
    if (empty($_POST['nombregru']) or empty ($_POST['carreras'])) {
       echo '<div class="alert alert-danger">Hay campos que estan vacios</div>';
    } else {
       $nombregru=$_POST['nombregru'];
       $carreras=$_POST['carreras'];
       $sql=$conn->query(" INSERT INTO grupo (NombreG, id_carrera) VALUES ('$nombregru','$carreras');");
   
        if ($sql==1) {
            echo '<div><h3 class="fw-bold mb-5">Se ha registrado correctamente la carrera</h3></div>';
        } else {
            echo '<div><h3 class="fw-bold mb-5"error al registrar</h3></div>';
        }
    }
}


?>



