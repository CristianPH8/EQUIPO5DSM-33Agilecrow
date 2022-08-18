<?php 
include('/wamp64/www/Pagina/startbootstrap-sb-admin-master/dist/config/conexion.php');

if(!empty($_POST['editar'])){
    if (empty($_POST['nombreca']) or empty ($_POST['descripcion'])) {
       echo '<div class="alert alert-danger">Hay campos que estan vacios</div>';
    } else {
      $idcarrera=$_POST['idcarrera'];
       $nombre=$_POST['nombreca'];
       $descripcion=$_POST['descripcion'];
       $sql=$conn->query(" UPDATE carrera SET NombreC='$nombre', Descripcion='$descripcion' WHERE id_carrera=$idcarrera;");
   
        if ($sql==1) {
            echo '<div><h3 class="fw-bold mb-5">Ha editado correctamente</h3></div>';
        } else {
            echo '<div><h3 class="fw-bold mb-5"error al editar</h3></div>';
        }
    }
}


?>



