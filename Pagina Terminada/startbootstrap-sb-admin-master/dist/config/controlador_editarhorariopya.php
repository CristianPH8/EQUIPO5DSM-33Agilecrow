<?php 
include('/wamp64/www/Pagina/startbootstrap-sb-admin-master/dist/config/conexion.php');

if(!empty($_POST['editar'])){
    if (empty($_POST['HoraI']) or empty ($_POST['HoraF']) or empty ($_POST['Lugar'])) {
       echo '<div class="alert alert-danger">Hay campos que estan vacios</div>';
    } else {
        $idhorariopya=$_POST['idhorariopya'];
        $Horai=$_POST['HoraI'];
        $Horaf=$_POST['HoraF'];
        $Lugar=$_POST['Lugar'];
        $Dias=$_POST['Dias'];
        $Materia=$_POST['Materia'];
        $Grupo=$_POST['Grupos'];
       $sql=$conn->query(" UPDATE horariopya SET Hora_inicio='$Horai', Hora_termino='$Horaf', Dia='$Dias', Lugar='$Lugar', id_materia=$Materia, id_grupo=$Grupo WHERE id_horariopya=$idhorariopya;");
   
        if ($sql==1) {
            echo '<div><h3 class="fw-bold mb-5">Ha editado correctamente</h3></div>';
        } else {
            echo '<div><h3 class="fw-bold mb-5"error al editar</h3></div>';
        }
    }
}


?>



