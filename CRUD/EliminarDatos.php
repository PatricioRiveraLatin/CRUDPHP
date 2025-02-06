<?php

include("../Config/Conexion.php");

$id = $_GET['run'];

$sql="delete from tablax where run='$id'";

$query = mysqli_query($conexion, $sql);

if($query===TRUE)
{
    

    header("Location: ../Index.php");


}else
{
    echo "Datos No se elimino";
}


?>