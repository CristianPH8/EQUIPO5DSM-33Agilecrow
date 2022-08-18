<?php 
include('/wamp64/www/Pagina/startbootstrap-sb-admin-master/dist/config/conexion.php');

if(!empty($_POST['registro'])){
    if (empty($_POST['HoraI']) or empty ($_POST['MinutosI']) or empty ($_POST['HoraF']) or empty ($_POST['MinutoF'])) {
       echo '<div class="alert alert-danger">Hay campos que estan vacios</div>';
    } else {
       $Horai=$_POST['HoraI'];
       $MinutosI=$_POST['MinutosI'];
       $Horaf=$_POST['HoraF'];
       $MinutosF=$_POST['MinutoF'];
       $Profe=$_POST['Profe'];
       $Dias=$_POST['Dias'];
       $Materia=$_POST['Materia'];
       $Grupo=$_POST['Grupos'];
       $sql=$conn->query(" INSERT horarioa (Hora_inicio, Hora_termino, Nombre_profesor, Dia, id_materia, id_grupo) VALUES ('$Horai:$MinutosI:00','$Horaf:$MinutosF:00','$Profe','$Dias',$Materia,$Grupo );");
   
        if ($sql==1) {
            echo '<div><h3 class="fw-bold mb-5">Te has registrado correctamente</h3></div>';
        } else {
            echo '<div><h3 class="fw-bold mb-5"error al registrar</h3></div>';
        }
    }
}


?>



