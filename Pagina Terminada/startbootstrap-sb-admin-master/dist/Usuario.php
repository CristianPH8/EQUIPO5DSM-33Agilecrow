    

<!DOCTYPE html>
<html lang="es">
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
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Usuarios</h1>
                        <?php 
                                    include ('/wamp64/www/Pagina/config/conexion.php');
                                    include ('/wamp64/www/Pagina/startbootstrap-sb-admin-master/dist/config/controladoreliminar.php');
                     
                                    ?>
                       
                        <a href="http://localhost/Pagina/startbootstrap-sb-admin-master/dist/agregarusuario" class="btn btn-sm btn-primary shadow-sm "><i 
                        class="fas fa-plus fa-sm text-white-50" aria-hidden="true">
                            
                        </i> Agregar</a>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                    <tr>
                                            <th>Nombre</th>
                                            <th>Apellido Paterno</th>
                                            <th>Apellido Materno</th>
                                            <th>Telefono</th>
                                            <th>Correo Electronico</th>
                                            <th>Contraseña</th>
                                            <th>Tipo</th>
                                            <th>Matricula</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php 
                                    
                                    $sql=$conn->query("SELECT * FROM usuario"); 
                                    while($datos=$sql->fetch_object()){
                                    ?>
                                        <tr>
                                            <td><?= $datos->Nombre?></td>
                                            <td><?= $datos->Ap?></td>
                                            <td><?= $datos->Am?></td>
                                            <td><?= $datos->Telefono?></td>
                                            <td><?= $datos->Correo?></td>
                                            <td><?= $datos->Contraseña?></td>
                                            <td><?= $datos->Tipo?></td>
                                            <td><?= $datos->Matricula?></td>
                                            <td>
                                                <a href="http://localhost/Pagina/startbootstrap-sb-admin-master/dist/editarusuario.php?id=<?=$datos->Matricula ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="http://localhost/Pagina/startbootstrap-sb-admin-master/dist/Usuario.php?id=<?=$datos->Matricula ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php   }        ?>
                                    </tbody>
                                </table>
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
