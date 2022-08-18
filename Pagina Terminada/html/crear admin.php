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
          <h2 class="fw-bold mb-5">Favor de Ingresar tus Datos</h2>
          
        
          <form method="POST">
          <?php

          include('./config/controlador_registrar.php');
            ?>


            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-4 mb-4">
                <div class="form-outline">
                  <input  name="nombre" type="text" class="form-control" />
                  <label class="form-label">Nombre</label>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="form-outline">
                  <input  name="apellidop" type="text"class="form-control" />
                  <label class="form-label">Apellido Paterno</label>
              </div>
              </div>
              <div class="col-md-4 mb-4">
                  <div class="form-outline">
                    <input name="apellidom"  type="text" class="form-control" />
                    <label class="form-label">Apellido Materno</label>
                  </div>
                </div>
            </div>

            <!-- Email input -->
            <div class="row">
              <div class="col-md-4 mb-4">
                <div class="form-outline">
                  <input name="correo" type="text" class="form-control" />
                  <label class="form-label" >Correo Electronico</label>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="form-outline">
                  <input name="matricula" type="text" class="form-control" />
                  <label class="form-label" >Matricula</label>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                  <div class="form-outline">
                    <input name="telefono" type="text" class="form-control" />
                    <label class="form-label" >Numero Telefonico</label>
                  </div>
                </div>
            </div>
                  <!-- tipo input -->
              <div class="row">
              <div class="col-md-12 mb-4">
                <div class="form-outline">
                <select name="tipouser" class="form-control form-control-sm">  
                <option value="Profesor">Profesor</option>
                   <option value="Alumno">Alumno</option>
                  </select>
                  <label class="form-label" >Selecciona tipo de cuenta</label>
                </div>
              </div>
            
            
            </div>
            <!-- Password input -->
            <div class="row">
              <div class="col-md-12 mb-4">
                <div class="form-outline">
                  <input name="clave" type="password"  class="form-control" />
                  <label class="form-label" >Contraseña</label>
                </div>
              </div>
            
            
            </div>
            
            

            <!-- Submit button -->
            <input name="registro" type="submit" class=" btn btn-dark btn-block mb-4 text-white"></input>
              <div>
                <p class="mb-0">Ya tienes cuenta? <a href="http://localhost/Pagina/Iniciarsesion.php" class="text-black-50 fw-bold">Inicia sesion</a>
                </p>
          </div>

           
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
</div> 