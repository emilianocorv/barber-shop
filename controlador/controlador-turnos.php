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
        $idservicio = $_POST['servicio'];
        $cod_area = $_POST['codArea'];
        $telefono = $_POST['telefono'];
        try {
            echo 'entramos al try';
            print_r($_POST);
            $query = $conn->query ("INSERT INTO turnos (fecha,time,mail,idservicio,cod_area,telefono) VALUES ('$fecha','$time','$email','$idservicio','$cod_area','$telefono')");
            echo 'termino la query';
        } catch (Exception $e){
            echo  $e->getMessage();
            echo '<div class="alert alert-danger mt-4">Error al seleccionar el turno</div>';
        }/*
        if ($query == true){
            echo '<div class="alert alert-success mt-4">La consulta se emvio correctamente</div>';
            print "<script>window.setTimeout(function() { window.location = 'index.php' }, 3000);</script>";
        }*/
    }
}
?>