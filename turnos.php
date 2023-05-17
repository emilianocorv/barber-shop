<?php include 'header.php'; ?>

<section class="first container-fluid d-flex flex-column text-white p-4">
    <div class="container w-50">
    <div class="px-4">
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
                            <div class="input-group-prepend m-1">
                                    <span class="input-group-text">+54</span>
                            </div>
                            <input class="form-control required m-1" type="tel" placeholder="Cód area" name="codArea" id="codArea" value="11" minlength="2" maxlength="4">
                            <input class="form-control required m-1" type="tel" placeholder="XXXXXXXX" maxlength="8" minlength="5" id="campoValidacion">
                        </div>
                     <small>Sin 0 ni 15. Ingrese sólo números.</small>
                </div>
            </div>
        </div>

        <div class="row px-4 my-2">
            
            <div class="col my-1">
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
            <div class="col-12 py-4">
                <div class="form-group">
                    <label class="control-label">Servicio</label>
                    <div class="form-control">
                        <select name="" id="" class="form-control" >
                            <option class="bg-light" value="">Barba</option>
                            <option class="bg-light" value="">Corte</option>
                            <option class="bg-light" value="">Corte infantil</option>
                            <option class="bg-light" value="">Pelo y barba</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row px-4">
            <div class="col-6">
                <div class="form-group">
                    <label class="control-label">Fecha</label>
                    <input class="form-control required" type="date" placeholder="DD/MM/AAAA" id="fecha" name="fecha" value="">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label class="control-label">Hora</label>
                    <select id="horas" name="horas" class="form-control required">
                        <option value="10:00" class="bg-light">10:00</option>
                        <option value="10:30" class="bg-light">10:30</option>
                        <option value="11:00" class="bg-light">11:00</option>
                        <option value="11:30" class="bg-light">11:30</option>
                        <option value="12:00" class="bg-light">12:00</option>
                        <option value="12:30" class="bg-light">12:30</option>
                        <option value="13:00" class="bg-light">13:00</option>
                        <option value="13:30" class="bg-light">13:30</option>
                        <option value="14:00" class="bg-light">14:00</option>
                        <option value="14:30" class="bg-light">14:30</option>
                        <option value="15:00" class="bg-light">15:00</option>
                        <option value="15:30" class="bg-light">15:30</option>
                        <option value="16:00" class="bg-light">16:00</option>
                        <option value="16:30" class="bg-light">16:30</option>
                        <option value="17:00" class="bg-light">17:00</option>
                        <option value="17:30" class="bg-light">17:30</option>
                        <option value="18:00" class="bg-light">18:00</option>
                        <option value="18:30" class="bg-light">18:30</option>
                        <option value="19:00" class="bg-light">19:00</option>
                        <option value="19:30" class="bg-light">19:30</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row p-4 my-2">
            <div class="col">
                <input type="submit" class="btn btn-primary d-block mx-auto " value=" Confirmar turno ">
            </div>
        </div>
        
    </form>
    </div>
</section>


<?php include 'footer.php'; ?>