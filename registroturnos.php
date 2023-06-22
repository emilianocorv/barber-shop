<?php 
session_start();
include('header.php');
include('conexion.php');
$query = $conn->query("SELECT * FROM turnos");
?>
<section class="first main-font container-fluid text-white d-flex justify-content-center">

    <div class="container px-4 col-12 col-md-10 col-lg-10 col-xl-10">
        <h3 class="m-4 text-center text-white">Turnos solicitados</h3>    
        <div>
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                    <td scope="col">Hora</td>
                    <td scope="col">Email</td>
                    <td scope="col">Servicio</td>
                    <td scope="col">Codigo de area</td>
                    <td scope="col">Telefono</td>
                    <td scope="col">Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($fila = mysqli_fetch_array($query)){
                            echo "<tr>
                                <td>".$fila['time']."</td>
                                <td>".$fila['mail']."</td>
                                <td>".$fila['idservicio']."</td>
                                <td>".$fila['cod_area']."</td>
                                <td>".$fila['telefono'].'</td>
                                <td><div class="d-flex justify-content-center bg-dark text-white">
                                        <a href="#" class="mx-2 link-primary bg-dark"><i class="bi bi-pencil-fill bg-dark"></i></a>
                                        <a href="#" class="mx-2 link-danger bg-dark"><i class="bi bi-trash icon bg-dark"></i></a>
                                    </div>
                                </td>
                            </tr>';
                        }
                    ?>  
                </tbody>
                
            </table>
        </div>
    </div>
</section>
<?php include('footer.php');?>

<!-- 
//while ($registro = $query -> fetch(PDO::FETCH_ASSOC)){
    //echo "ID: ".$registro["id_usuarios"] . "Usuarios: " . $registro["usuarios"] . "Password: ". $registro["password"] . "Passh: " . $registro["hash_password"] . "Email: " . $registro["mail"] . "Perfil: " . $registro["perfil"] . "Comentairos: " . $registro["comentarios_usuarios"] . "Estado: " . $registro["estado"] . "Fecha: " . $registro["fecha_usuario"] . "<br>";
//}-->