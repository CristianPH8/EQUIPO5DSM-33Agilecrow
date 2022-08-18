<?php 
include('/wamp64/www/Pagina/startbootstrap-sb-admin-master/dist/config/conexion.php');

if(!empty($_POST['editar'])){
    if (empty($_POST['nombrema']) or empty ($_POST['descripcion'])) {
       echo '<div class="alert alert-danger">Hay campos que estan vacios</div>';
    } else {
        $idmateria=$_POST['idmateria'];
       $nombre=$_POST['nombrema'];
       $descripcion=$_POST['descripcion'];
       $sql=$conn->query(" UPDATE materias SET NombreM='$nombre', Descripcion='$descripcion' WHERE id_materia=$idmateria;");
   
        if ($sql==1) {
            echo '<div><h3 class="fw-bold mb-5">Ha editado correctamente</h3></div>';
        } else {
            echo '<div><h3 class="fw-bold mb-5"error al editar</h3></div>';
        }
    }
}


?>



