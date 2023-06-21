<?php
if(!empty($_POST['btnTurno'])){
    if (empty($_POST['codArea']) or
        empty($_POST['telefono']) or
        empty($_POST['servicio']) or
        empty($_POST['fecha']) or
        empty($_POST['horas']))
        {
        echo '<div class="alert alert-danger mt-4">Uno o mas campos estan vacios</div>';
        print_r($_POST);

    } else {//(fecha,time,mail,idServicio,cod_area,telefono)
        $fecha = $_POST['fecha'];
        $time = $_POST['horas'];
        $email = $_SESSION['email'];
        $idServicio = $_POST['servicio'];
        $cod_area = $_POST['codArea'];
        $telefono = $_POST['telefono'];
        try {
            echo 'entramos al try';
            $query = $conn->query ("INSERT INTO turnos (fecha,time,mail,idServicio,cod_area,telefono) VALUES ('$fecha','$time','$email','$idServicio','$cod_area','$telefono')");
            echo 'termino la query';
        } catch (Exception $e){
            echo '<div class="alert alert-danger mt-4">Error al seleccionar el turno</div>';
        }
        if ($query == 1){
            echo '<div class="alert alert-success mt-4">La consulta se emvio correctamente</div>';
            print "<script>window.setTimeout(function() { window.location = 'index.php' }, 3000);</script>";
        }
    }
}
?>