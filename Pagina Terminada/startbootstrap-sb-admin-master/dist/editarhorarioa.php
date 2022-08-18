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
            <?php
            
        include('../dist/Html/formuhorarioeditar.php');

?>

                 <!-- inicio footer -->
          
                 <!-- final footer -->
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
