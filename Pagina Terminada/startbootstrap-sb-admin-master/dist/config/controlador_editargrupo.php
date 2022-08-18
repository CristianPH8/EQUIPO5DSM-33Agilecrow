<?php 
include('/wamp64/www/Pagina/startbootstrap-sb-admin-master/dist/config/conexion.php');

if(!empty($_POST['editar'])){
    if (empty($_POST['nombregru'])) {
       echo '<div class="alert alert-danger">Hay campos que estan vacios</div>';
    } else {
      $idgrupo=$_POST['idgrupo'];
       $nombre=$_POST['nombregru'];
       $carreras=$_POST['carreras'];
       $sql=$conn->query(" UPDATE grupo SET NombreG='$nombre', id_carrera='$carreras' WHERE id_grupo='$idgrupo';");
   
        if ($sql==1) {
            echo '<div><h3 class="fw-bold mb-5">Ha editado correctamente</h3></div>';
        } else {
            echo '<div><h3 class="fw-bold mb-5"error al editar</h3></div>';
        }
    }
}


?>



