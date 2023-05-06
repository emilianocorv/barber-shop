<?php
$host = "sql100.epizy.com";
$user = "epiz_34145479";
$pass = "iftsmataderos";
$db = "epiz_34145479_barberia";

$conn = new mysqli ( $host, $user , $pass , $db);

if ($conn-> connect_error) {
    die("fallo la conexion".$conn->connect_error);

}
echo "conectado exitosamente";
?>