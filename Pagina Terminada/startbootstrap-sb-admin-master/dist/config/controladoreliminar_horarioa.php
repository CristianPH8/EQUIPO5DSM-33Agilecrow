<?php 
include('/wamp64/www/Pagina/startbootstrap-sb-admin-master/dist/config/conexion.php');
if (!empty($_GET["id"])) {
   $idhorarioa=$_GET["id"];
$sql=$conn->query(" DELETE FROM horarioa WHERE id_horarioa='$idhorarioa'");
if ($sql==1) {
   echo '<div class="alert alert-success">Horario eliminado correctamente</div>' ;
} else {
    echo '<div class="alert alert-danger">Error al eliminar</div>' ;
}






}


?>
