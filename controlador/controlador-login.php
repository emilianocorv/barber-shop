<?php
session_start();

if (!empty($_POST["btnLogin"])) {
    if (empty($_POST["email"]) || empty($_POST["password"])) {
        echo '<div class="alert alert-danger mt-4">No ingresó usuario y contraseña. Por favor intente nuevamente</div>';
    } else {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $pass_cifrado = hash('sha256', $password.$email);

        $query = $conn->query("SELECT nivel_seg, nombre FROM usuarios WHERE mail='$email' AND pass='$pass_cifrado'");

        try {
            if ($query && $datos = $query->fetch_object()) {
                $_SESSION['loggedin'] = true;
                $_SESSION['nivel_acceso'] = $datos->nivel_seg;
                $_SESSION['nombre'] = ucfirst($datos->nombre); //La funcion ucfirst devuelve el nombre con la primer letra en mayuscula.
                header("Location: turnos.php");
                //echo '<div class="alert alert-danger mt-4">BIENVENIDO ' . $_SESSION['nombre'] . '<br> Tu nivel de acceso es: ' .$_SESSION['nivel_acceso'] . '</div>';
                exit();
            } else {
                echo '<div class="alert alert-danger mt-4">Email o contraseña incorrectos</div>';
            }
        } catch (Exception $e) {
        }
    }
}

?>