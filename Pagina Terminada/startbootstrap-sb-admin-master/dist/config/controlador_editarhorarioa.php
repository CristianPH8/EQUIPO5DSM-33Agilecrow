<?php 
include('/wamp64/www/Pagina/startbootstrap-sb-admin-master/dist/config/conexion.php');

if(!empty($_POST['editar'])){
    if (empty($_POST['HoraI']) or empty ($_POST['HoraF'])) {
       echo '<div class="alert alert-danger">Hay campos que estan vacios</div>';
    } else {
        $idhorarioa=$_POST['idhorarioa'];
        $Horai=$_POST['HoraI'];
        $Horaf=$_POST['HoraF'];
        $Profe=$_POST['Profe'];
        $Dias=$_POST['Dias'];
        $Materia=$_POST['Materia'];
        $Grupo=$_POST['Grupos'];
       $sql=$conn->query(" UPDATE horarioa SET Hora_inicio='$Horai', Hora_termino='$Horaf', Nombre_profesor='$Profe', Dia='$Dias', id_materia=$Materia, id_grupo=$Grupo WHERE id_horarioa=$idhorarioa;");
   
        if ($sql==1) {
            echo '<div><h3 class="fw-bold mb-5">Ha editado correctamente</h3></div>';
        } else {
            echo '<div><h3 class="fw-bold mb-5"error al editar</h3></div>';
        }
    }
}


?>



