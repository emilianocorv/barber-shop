<?php 

if(!empty($_POST["btnLogin"])){
    if(empty($_POST["email"]) and empty($_POST["password"])){
        echo '<div class="alert alert-danger mt-4">No ingresó usuario y contraseña. Por favor intente nuevamente</div>';
    }
    else{
        $email = $_POST["email"];
        $password = $_POST["password"];
        $query = $conn->query("SELECT * FROM usuarios WHERE mail='$email' and pass='$password'");
        if ($datos = $query->fetch_object()){
            header("location:turnos.php");
        }
        else{
            echo '<div class="alert alert-danger mt-4">Email o contraseña incorrectos</div>';
        }
        }
}

?>