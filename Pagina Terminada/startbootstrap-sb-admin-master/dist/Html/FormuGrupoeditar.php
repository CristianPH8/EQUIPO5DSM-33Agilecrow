<div>
<div class="page-header text-white my-5">
    <center><h1>Crea tu Cuenta</h1></center>
  </div>
<!-- Section: Design Block -->
<section class="my-5 text-center ">
  <!-- Background image -->

  <div class="shadow-lg card mx-4 mx-md-5 shadow-5-strong ">
    <div class="card-body py-5 px-md-5">

      <div class="row justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Favor de Ingresar los Datos</h2>
          
        
          <form method="POST">
          <?php
          $idgrupo=$_GET["id"];
          
          include('/wamp64/www/Pagina/startbootstrap-sb-admin-master/dist/config/controlador_editargrupo.php');
          $sql=$conn->query("SELECT * FROM grupo WHERE id_grupo=$idgrupo ");
            ?>
           <?php
          while($datos=$sql->fetch_object()){
            ?>
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <input type="hidden" name="idgrupo" value="<?= $_GET["id"] ?>">
            <div class="row">
              <div class="col-md-12 mb-4">
                <div class="form-outline">
                  <input  name="nombregru" type="text" class="form-control" value="<?= $datos->NombreG ?>"/>
                  <label class="form-label">Nombre del Grupo</label>
                </div>
              </div>
            </div>
            <!-- Password input -->
            <div class="row">
              <div class="col-md-12 mb-4">
                <div class="form-outline">
                

                <select name="carreras" class="form-control form-control-sm">  
                <?php 
                 include ('/wamp64/www/Pagina/config/conexion.php');
                 $sql=$conn->query("SELECT * FROM carrera"); 
                 while($datos=$sql->fetch_object()){
                   ?>
                <option value="<?= $datos->id_carrera?>"><?= $datos->NombreC?></option>
                <?php   }        ?>
                  </select>

                  
                  <label class="form-label" >Selecciona la Carrera</label>
                </div>
              </div>
            
            </div>
            

            <!-- Submit button -->
            <input name="editar" type="submit" class=" btn btn-dark btn-block mb-4 text-white" value="Editar"></input>
            <?php  
          }
            ?>

           
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
</div> 
