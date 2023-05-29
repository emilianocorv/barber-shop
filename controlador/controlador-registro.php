<?php

if(!empty($_POST['btnRegistro'])){
    if (empty($_POST['nombre']) or
        empty($_POST['apellido']) or
        empty($_POST['mail']) or
        empty($_POST['password']))
        {
        echo '<div class="alert alert-danger mt-4">Uno o mas campos estan vacios</div>';
    }
    else{
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $mail = $_POST['mail'];
        $password = $_POST['password'];

        $query = $conn->query("INSERT INTO usuarios (nombre,apellido,mail,pass) VALUES ('$nombre','$apellido','$mail','$password')");

        if ($query == 1){
            echo '<div class="alert alert-success mt-4">Usuario registrado correctamente. Puede iniciar sesion</div>'; 
        }
        else{
            echo '<div class="alert alert-danger mt-4">Error al registrar, intente nuevamente</div>';
        }
    }
}

?>