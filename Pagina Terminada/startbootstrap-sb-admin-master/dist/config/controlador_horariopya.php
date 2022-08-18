<?php 
include('/wamp64/www/Pagina/startbootstrap-sb-admin-master/dist/config/conexion.php');

if(!empty($_POST['registro'])){
    if (empty($_POST['HoraI']) or empty ($_POST['MinutosI']) or empty ($_POST['HoraF']) or empty ($_POST['MinutoF']) or empty ($_POST['Lugar'])) {
       echo '<div class="alert alert-danger">Hay campos que estan vacios</div>';
    } else {
       $Horai=$_POST['HoraI'];
       $MinutosI=$_POST['MinutosI'];
       $Horaf=$_POST['HoraF'];
       $MinutosF=$_POST['MinutoF'];
       $Lugar=$_POST['Lugar'];
       $Dias=$_POST['Dias'];
       $Materia=$_POST['Materia'];
       $Grupo=$_POST['Grupos'];
       $sql=$conn->query(" INSERT horariopya (Hora_inicio, Hora_termino, Dia, Lugar, id_materia, id_grupo) VALUES ('$Horai:$MinutosI:00','$Horaf:$MinutosF:00','$Dias','$Lugar',$Materia,$Grupo );");
   
        if ($sql==1) {
            echo '<div><h3 class="fw-bold mb-5">Te has registrado correctamente</h3></div>';
        } else {
            echo '<div><h3 class="fw-bold mb-5"error al registrar</h3></div>';
        }
    }
}


?>



