<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginacion</title>
</head>
<body>
    <?php
    try{
        $base = new PDO("mysql:host=localhost; $dbname = usuarios", "root", "");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $base->exec("SET CHARACTER SET utf8");

        $tamaniopagina = 3;
        if(isset($_GET["pagina"])){
            if($_GET["pagina"]==1){
                header("Location: paginacion.php");
            } 
            else{
                $pagina = $_GET["pagina"];
            }
        }
        else{
            $pagina = 1;
        }

        $empezarDesde = ($pagina - 1) * $tamaniopagina;

        $sql = "SELECT * FROM datos_usuarios";

        $resultado = $base->prepare("$sql");

        $resultado->execute(array());

        $numreg = $resultado->rowCount();

        $totalpaginas = ceil($numreg / $tamaniopagina);

        // mostrar cantidades
        echo "Numero de registros de la consulta: " . $numreg . "<br>";
        echo "Mostramos: " . $tamaniopagina . "<br>";
        echo "Mostrando pagina: " . $pagina . " de " . $totalpaginas . "<br>";
    
        $resultado->closeCursor();

        $sqllimite = "SELECT * FROM datos_usuarios LIMIT $empezarDesde, $tamaniopagina";

        $resultado = $base->prepare("$sqllimite");

        $resultado->execute(array());

        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
            echo "ID: " . $registro["id_usuarios"] . "Usuarios: " . $registro["usuarios"] . "Password: " . $registro["password"] . "Passh: " . $registro["hash_password"] . "El email: " . $registro["mail"] . "Perfil: " . $registro["perfil"] . "Comentarios: " . $registro["comentarios_usuarios"] . "Estado: " . $registro["estado"] . "Fecha: " . $registro["fecha_usuario"] . "<br>";

        }
    }

    catch(Exception $e){
        echo "Linea de error: " . $e->getLine();
    }

    for ($i = 1; $i <= $totalpaginas; $i++){
        echo "<a href='?pagina=" . $i . "'> " . $i . "</a>";
    }



    ?>
</body>
</html>