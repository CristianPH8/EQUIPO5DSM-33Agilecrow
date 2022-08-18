<?php 
include('/wamp64/www/Pagina/startbootstrap-sb-admin-master/dist/config/conexion.php');
if (!empty($_GET["id"])) {
   $idgrup=$_GET["id"];
$sql=$conn->query(" DELETE FROM grupo WHERE id_grupo='$idgrup'");
if ($sql==1) {
   echo '<div class="alert alert-success">Usuario eliminado correctamente</div>' ;
} else {
    echo '<div class="alert alert-danger">Error al eliminar</div>' ;
}






}


?>
