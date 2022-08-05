<?php 
include('/wamp64/www/Pagina/startbootstrap-sb-admin-master/dist/config/conexion.php');
if (!empty($_GET["id"])) {
   $matri=$_GET["id"];
$sql=$conn->query(" DELETE FROM usuario WHERE MATRICULA='$matri'");
if ($sql==1) {
   echo '<div class="alert alert-success">Usuario eliminado correctamente</div>' ;
} else {
    echo '<div class="alert alert-danger">Error al eliminar</div>' ;
}






}


?>
