<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "barber";

$conn = new mysqli ( $host, $user , $pass , $db);

if ($conn-> connect_error) {
    die("fallo la conexion".$conn->connect_error);

}
echo "conectado exitosamente";
?>
