<?php include 'header.php'; ?>

<section class="first container-fluid d-flex flex-column text-white p-4" id="background">

    <div class="p-4">
        <h4 class="mt-4">Turnos</h4>
        <h6>Completa el siguiente formulario para reservar tu turno</h6>
        <hr>
    </div>
    
    <form action="conexion.php" method="post">
        <div class="row px-4">
            <div class="col">
                <h5 class="">Tus datos</h5>
                <div class="form-group">
                    <label class="control-label text-white">Teléfono celular</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                    <span class="input-group-text">+54</span>
                            </div>
                            <input class="form-control required" type="tel" placeholder="Cód area" name="codArea" id="codArea" value="11" minlength="2" maxlength="4">
                            <input class="form-control required" type="tel" placeholder="XXXXXXXX" maxlength="8" minlength="5" id="campoValidacion">
                        </div>
                     <small>Sin 0 ni 15. Ingrese sólo números.</small>
                </div>
            </div>
        </div>

        <div class="row px-4 my-2">
            <div class="col">
                <h4>Reserva</h4>
            </div>
        </div>

        <div class="row px-4">
            <div class="col-12">
                <div class="form-group">
                    <label class="control-label">Categoria</label>
                    <div class=" form-control">
                        <select class="form-control bg-light">
                            <option>Peluqueria</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="control-label">Servicio</label>
                    <div class="form-control">
                        <select name="" id="" class="form-control bg-light" >
                            <option value="">Barba</option>
                            <option value="">Corte</option>
                            <option value="">Corte infantil</option>
                            <option value="">Pelo y barba</option>
                        </select>
                    </div>
                </div>
                
            </div>

        </div>

        <div class="row p-4">
            <div class="col">
                <input type="submit" class="btn btn-primary" value="Confirmar turno">
            </div>
        </div>
        
    </form>
    
</section>


<?php include 'footer.php'; ?>