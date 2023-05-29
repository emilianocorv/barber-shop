<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "barber";

$conn = new mysqli ( $host, $user , $pass , $db);
$conn->set_charset("utf8");

if ($conn-> connect_error) {
    die("fallo la conexion".$conn->connect_error);
}
?>
