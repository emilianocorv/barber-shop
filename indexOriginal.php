<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon y estilos CSS locales-->
    <link rel="icon" type="image/png" href="img/logo32px.png" />
    <link rel="stylesheet" href="styles.css" />
    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;200;300;500;700&display=swap"
      rel="stylesheet"
    />
    <title>Barber Shop</title>
  </head>

  <body>
    <header>
      <div class="container">
        <header class="d-flex flex-wrap justify-content-center header-fix">
          <a
            href="index.html"
            class="col-12 link-offset-2 link-underline link-underline-opacity-0 text-white"
            ><h1 class="text-white text-center fw-lighter mt-1">
              <img
                src="img/logoamarillo32px.png"
                class="mb-1 mx-3"
                alt="logo-barbers-shop"
              />Barber Shop
            </h1></a
          >

          <ul class="nav nav-pills main-font responsive-font fw-lighter">
            <li class="nav-item">
              <a
                href="index.html"
                class="nav-link text-white links-hover"
                aria-current="page"
                >Inicio</a
              >
            </li>
            <li class="nav-item">
              <a href="servicios.php" class="nav-link text-white links-hover">Servicios</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-white links-hover">Turnos</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-white links-hover"
                >Nuestros trabajos</a
              >
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link text-white links-hover">Contacto</a>
            </li>
          </ul>
        </header>
      </div>
    </header>
    
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
              <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">
                Reserva tu turno
              </button>
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
   
    <footer class="container-fluid">
      <h6 class="text-center text-light">Corvalan - Barzizza - Limachi - IFTS4</h6>
    </footer>


    <script src="script.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
