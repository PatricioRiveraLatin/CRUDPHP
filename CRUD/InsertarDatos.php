<?php
include("../Config/Conexion.php");

$run = $_POST['run'];

$nombre = $_POST['nombre'];

$fono = $_POST['fono'];

$direccion = $_POST['direccion'];

/*sentecia sql llamada $sql (se insertan datos em la tabla llamada tablax)*/
$sql = "insert into tablax(run,nombre,fono,direccion) values('$run','$nombre','$fono','$direccion')";

/*guardar la sentencia sql ($sql) en $res*/
/*la $conexion hace referencia a la base de datos basex(esta conexion se estabecio en la carpeta Config) */
$res=mysqli_query($conexion,$sql);

if($res=== TRUE)
{
    HEADER("location:../Index.php");
}else /*en caso contrario */
{
    echo "Datos No se Guardaron";
}
/*wena*/
?>