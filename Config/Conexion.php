<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "basex";

$conexion = new mysqli($host, $user, $pass, $db);

if ($conexion) {
    echo "conectado";

}else{
    echo ("no conectado");
}
?>