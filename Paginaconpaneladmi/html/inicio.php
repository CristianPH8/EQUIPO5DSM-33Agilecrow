<section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block center">
                <img src="http://localhost/Pagina/imagenes/Log.png" 
                  alt="login form" class="img-fluid"/>
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  
                  <form  method="POST">
                  
                    <div class="d-flex align-items-center mb-3 pb-1">
                      
                      <span class="h1 fw-bold mb-0">Inicia sesion</span>
                    </div>
                    <?php  
                  include('./config/validacionlogin.php');
                  ?>

                    <div class="form-outline mb-4">
                      <input type="email" name="correo" class="form-control form-control-lg" />
                      <label class="form-label">Correo</label>
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" name="clave1" class="form-control form-control-lg" />
                      <label class="form-label">Constraseña</label>
                    </div>
  
               
                      <input class="btn btn-dark btn-lg btn-block"name='ingresar' type="submit" value="Iniciar" />
                   
  
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">No tienes cuenta? <a href="http://localhost/Pagina/Crearcuenta.php"
                        style="color: #393f81;">Registrate aqui</a></p>
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>