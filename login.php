<?php include('header.php')?>

<section class="first container-fluid text-white d-flex justify-content-center">
    
        <div class="px-4 col-12 col-md-6 col-lg-6 col-xl-4">
         <h3 class="mt-4 text-center">Iniciar sesión</h3>

        <form>
        <div class="form-group my-2">
        <label for="nombre">Usuario</label>
        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su usuario">
        </div>

        <div class="form-group my-2">
            <label for="apellido">Contraseña</label>
            <input type="password" class="form-control" id="apellido" placeholder="Ingrese su contraseña">
        </div>

        <div class="d-grid col-12 mx-auto">
            <button type="submit" class="btn btn-primary btn-lg my-4">Iniciar sesión</button>
            <button type="button" class="btn btn-dark btn-lg">Registrate</button>
        </div>
        </form>
        </div>
    
</section>

<?php include('footer.php');?>