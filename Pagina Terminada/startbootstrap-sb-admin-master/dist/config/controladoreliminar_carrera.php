<?php 
include('/wamp64/www/Pagina/startbootstrap-sb-admin-master/dist/config/conexion.php');
if (!empty($_GET["id"])) {
   $idhorarioa=$_GET["id"];
$sql=$conn->query(" DELETE FROM carrera WHERE id_carrera='$idhorarioa'");
if ($sql==1) {
   echo '<div class="alert alert-success">Carrera eliminada correctamente</div>' ;
} else {
    echo '<div class="alert alert-danger">Error al eliminar</div>' ;
}






}


?>
