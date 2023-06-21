<section class="container-fluid" style="min-height: 100vh">
      <div class="container col-xxl-8 px-4 first">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6 mx-auto">
            <img
              src="img/trabajos realizados/corte2.jpeg"
              class="d-block mx-lg-auto img-fluid rounded-end"
              alt="Afeitado con navaja"
            />
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold mb-3 text-light main-font">
              La experiencia de un corte perfecto
            </h1>
            <p class="lead text-light main-font">
              En nuestra barbería, nos aseguramos de que cada cliente se sienta
              cómodo y relajado durante su visita. Únete a nuestra familia de
              clientes satisfechos y experimenta la diferencia.
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">

              <?php 
              if ($_SESSION['loggedin']==true){
                echo '<a href="turnos.php" class="btn btn-primary btn-lg px-4 me-md-2">Reserva tu turno</a>';
              }
              else{
                echo '<a href="login.php" class="btn btn-primary btn-lg px-4 me-md-2">Iniciar sesión</a>';
              }
              ?>


              <button
                type="button"
                class="btn btn-outline-secondary btn-lg px-4"
              >
                Cancela tu turno
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>