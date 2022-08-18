<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/e18508d223.js" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
             <!-- NavBar -->
             <nav >
        <?php
        include('../dist/Html/navbaradmin.php');?></nav>
          <!-- fin Navbar -->
        <div id="layoutSidenav">
         <!-- inicio slider -->
         <?php
        include('../dist/Html/slider.php');

?>
              <!-- fin slider-->

            <div id="layoutSidenav_content">
                <main>
                    <div class=" container-fluid px-4">
                        <h1 class="mt-4">Horario Profesores y Asesores</h1>
                        <?php 
                                    include ('/wamp64/www/Pagina/config/conexion.php');
                                    include ('/wamp64/www/Pagina/startbootstrap-sb-admin-master/dist/config/controladoreliminar_horariopya.php');
                                    ?>
                        <a href="http://localhost/pagina/startbootstrap-sb-admin-master/dist/agregarhorariopya" class="btn btn-sm btn-primary shadow-sm "><i 
                        class="fas fa-plus fa-sm text-white-50" aria-hidden="true">
                            
                        </i> Agregar</a>
                        
                        <div class="mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                    <tr>
                                            <th>Id Horario</th>
                                            <th>Hora de Inicio</th>
                                            <th>Hora de Termino</th>
                                            <th>Dia</th>
                                            <th>Lugar</th>
                                            <th>Materia</th>
                                            <th>Grupo</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php 
                                    $sql=$conn->query("SELECT horariopya.id_horariopya, horariopya.Hora_inicio, horariopya.Hora_termino, horariopya.Dia, horariopya.Lugar, materias.NombreM, grupo.NombreG  FROM horariopya, grupo, materias WHERE horariopya.id_materia=materias.id_materia AND horariopya.id_grupo=grupo.id_grupo;"); 
                                    while($datos=$sql->fetch_object()){
                                    ?>
                                        <tr>
                                            <td><?= $datos->id_horariopya?></td>
                                            <td><?= $datos->Hora_inicio?></td>
                                            <td><?= $datos->Hora_termino?></td>
                                            <td><?= $datos->Dia?></td>
                                            <td><?= $datos->Lugar?></td>
                                            <td><?= $datos->NombreM?></td>
                                            <td><?= $datos->NombreG?></td>
                                            <td>
                                                <a href="http://localhost/Pagina/startbootstrap-sb-admin-master/dist/editarhorariopya.php?id=<?=$datos->id_horariopya ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="http://localhost/Pagina/startbootstrap-sb-admin-master/dist/HorarioPYA.php?id=<?=$datos->id_horariopya ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php   }        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </main>
         
            </div>
        </div>
        <script src="./js/jquery-3.6.0.js"></script>
        <script src="./js/footer.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
