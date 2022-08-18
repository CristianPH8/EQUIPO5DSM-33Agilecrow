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
          <h3 class="fw-bold mb-5">Favor de Ingresar los Datos y usar Sistema de 24 Hrs</h3>
          
        
          <form method="POST">
          <?php
          $idhorariopya=$_GET["id"];
          
          include('/wamp64/www/Pagina/startbootstrap-sb-admin-master/dist/config/controlador_editarhorariopya.php');
          $sql=$conn->query("SELECT * FROM horariopya WHERE id_horariopya=$idhorariopya");
            ?>
           <?php
          while($datos=$sql->fetch_object()){
            ?>
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <h5 class="fw-bold mb-5">Edita Hora de inicio</h5>
            <input type="hidden" name="idhorariopya" value="<?= $_GET["id"] ?>">
            <div class="row justify-content-center">
              <div class="col-md-2 mb-4">
                <div class="form-outline">
                  <input  name="HoraI" type="text" class="form-control" value="<?= $datos->Hora_inicio ?>" />
                  <label class="form-label">Hora, Minutos y Segundos</label>
                </div>
              </div>
             
            </div>

            <!-- Email input -->
            <h5 class="fw-bold mb-5">Edita Hora de termino</h5>
            <input type="hidden" name="idhorariopya" value="<?= $_GET["id"] ?>">
            <div class="row justify-content-center">
              <div class="col-md-3 mb-4">
                <div class="form-outline">
                  <input  name="HoraF" type="text" class="form-control" value="<?= $datos->Hora_termino ?>" />
                  <label class="form-label">Hora, Minutos y Segundos</label>
                </div>
              </div>
             
            </div>
              <!-- Mestro input -->
              <h5 class="fw-bold mb-5">Ingresa el Lugar</h5>
              <div class="row justify-content-center">
              <div class="col-md-12 mb-4">
                <div class="form-outline">
                  <input  name="Lugar" type="text" class="form-control" value="<?= $datos->Lugar ?>" />
                  <label class="form-label">Lugar</label>
                </div>
              </div>  
            </div>
                  <!-- dia,materia y grupo input -->
                  <h5 class="fw-bold mb-5">Ingresa el Dia,Materia y Grupo</h5>
              <div class="row">
              <div class="col-md-4 mb-4">
                <div class="form-outline">
                <select name="Dias" class="form-control form-control-sm">  
                <option value="Lunes">Lunes</option>
                   <option value="Martes">Martes</option>
                   <option value="Miercoles">Miercoles</option>
                   <option value="Jueves">Jueves</option>
                   <option value="Viernes">Viernes</option>
                   <option value="Sabado">Sabado</option>

                  </select>
                  <label class="form-label" >Dia</label>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="form-outline">
                <select name="Materia" class="form-control form-control-sm">
                <?php 
                 include ('/wamp64/www/Pagina/config/conexion.php');
                 $sql=$conn->query("SELECT * FROM materias"); 
                 while($datos=$sql->fetch_object()){
                   ?>  
                <option value="<?= $datos->id_materia?>"><?= $datos->NombreM?></option>
                   <?php   }        ?>
                  </select>
                  <label class="form-label" >Selecciona la materia</label>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="form-outline">
                <select name="Grupos" class="form-control form-control-sm">
                <?php 
                 include ('/wamp64/www/Pagina/config/conexion.php');
                 $sql=$conn->query("SELECT * FROM grupo"); 
                 while($datos=$sql->fetch_object()){
                   ?>   
                <option value="<?= $datos->id_grupo?>"><?= $datos->NombreG?></option>
                   <?php   }        ?>
                  </select>
                  <label class="form-label" >Selecciona el grupo</label>
                </div>
              </div>
            
          
            </div>
            <!-- Password input -->
         
            
            
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
