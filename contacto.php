<?php include('header.php')?>

<section class="first container-fluid text-white d-flex justify-content-center">
        <div class="container w-50 p-4">
            <div class="px-4">
            <h4 class="mt-4">Comunicate con nosotros</h4>
            <h6>A la brevedad responderemos tu consulta o comentario</h6>
            <hr>
        </div>

        <form>
        <div class="form-group my-2 px-4">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
        </div>

        <div class="form-group my-2 px-4">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="apellido" placeholder="Ingrese su apellido">
        </div>

        <div class="form-group my-2 px-4">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Ingrese su email">
        </div>

        <div class="form-group my-2 px-4">
            <label for="asunto">Asunto</label>
            <input type="text" class="form-control" id="asunto" placeholder="Asunto">
        </div>

        <div class="form-group my-2 px-4">
            <label for="comentarios">Comentarios</label>
            <textarea class="form-control" id="comentarios" rows="5" placeholder="Aqui sus comentarios"></textarea>
        </div>
        <div class="d-grid col-2 mx-auto">
            <button type="submit" class="btn btn-primary my-4">Enviar</button>
        </div>
        
        </form>
    </div>
</section>

<?php include('footer.php');?>