<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <!--Salto de linea-->
    <br>
    <!--Contenedor (sirve para darle mas orden al formulario)-->
    <div class="container">
        <!--Titulo centrado-->
        <h1 class="text-center" style="background-color: black; color:white">Listado Clientes</h1>
        <!--Salto de linea-->
        <br>
    </div>
    <!--Contenedor-->
    <div class="container">
        <!--Tabla de Bootstrap-->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Run</th>
      <th scope="col">Nombre</th>
      <th scope="col">Fono</th>
      <th scope="col">Dirección</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
<!--Código Php-->
  <?php
  /*Se esta llamando a la conexion a la base de datos que esta en la carpeta Config */
  require("Config/Conexion.php");
/*Aquí se están seleccionado todos los datos de la tabla tablax que se encuentra en la base de datos basex y se estan dejando en un array llamado reg */
  $sql = $conexion->query("select * from tablax");
  while ($reg = $sql->fetch_assoc())
{

  ?>
<tr>
    <!--row (fila), el codigo dice escucha (echo) los registros que estan en el arreglo (array) $reg en la fila de la variable run> -->
      <th scope="row"> <?php echo $reg['run'] ?> </th>
      <th scope="row"> <?php echo $reg['nombre']?></th>
      <th scope="row"><?php echo $reg['fono']?></th>
      <th scope="row"><?php echo $reg ['direccion'] ?> </th>

      <th>
        <a href="Views/EditarCliente.php?run=<?php echo $reg['run'] ?>" class="btn btn-warning">Editar</a>
        <a href="CRUD/EliminarDatos.php?run=<?php echo $reg['run'] ?>" class="btn btn-danger">Eliminar</a>

</th>
        

      </tr>
<!--Esa llave pertence a php por eso se debe cerrar de esa forma-->
      <?php
}
?>

  </tbody>
</table>
<!--Tabla-->
<div class="container">
<a href="Views/AgregarCliente.php" class="btn btn-success">Agregar</a>
</div>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>