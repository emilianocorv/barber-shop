<?php 
session_start();
include('header.php');
include('conexion.php');
$query = $conn->query("SELECT * FROM turnos");
?>
<section class="first main-font container-fluid text-white d-flex justify-content-center">

    <div class="px-4 col-12 col-md-6 col-lg-6 col-xl-4">
        <h3 class="mt-4 text-center">ESTO ES EL REGISTRO TURNOS</h3>
    </div>
    <div>
        <?php
            while ($fila = mysqli_fetch_array($query)){
                echo "vamos que funca";
            }
        ?>
    </div>
</section>
<?php include('footer.php');?>

<!-- 
//while ($registro = $query -> fetch(PDO::FETCH_ASSOC)){
    //echo "ID: ".$registro["id_usuarios"] . "Usuarios: " . $registro["usuarios"] . "Password: ". $registro["password"] . "Passh: " . $registro["hash_password"] . "Email: " . $registro["mail"] . "Perfil: " . $registro["perfil"] . "Comentairos: " . $registro["comentarios_usuarios"] . "Estado: " . $registro["estado"] . "Fecha: " . $registro["fecha_usuario"] . "<br>";
//}-->