<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

  <br>
  <div class="container">
  <h1 class="text-center" style="background-color: black; color:white">Editar</h1>
  </div>

  <div class="container"> 

  <br>



<!-- Aquí comienza el formulario HTML -->
<form class="container" action="../CRUD/EditarDatos.php" method="POST">


<!--Aquí comienza el código php-->
<?php
include("../Config/Conexion.php");

    $sql = "select * from tablax where run=".$_REQUEST['run'];


    // Ejecutar la consulta
    $res = $conexion->query($sql);

    $campos = $res->fetch_assoc();

    ?>


<!--php-->

<div class="mb-3">
    <label class="form-label">Run</label>
    <input type="number" class="form-control" name="run" id="run" value="<?php echo isset($campos['run']) ? $campos['run'] : ''; ?>">
  </div>

<div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo isset($campos['nombre']) ? $campos['nombre'] : ''; ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Fono</label>
    <input type="number" class="form-control" name="fono" id="fono" value="<?php echo isset($campos['fono']) ? $campos['fono'] : ''; ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Dirección</label>
    <input type="text" class="form-control" name="direccion" id="direccion" value="<?php echo isset($campos['direccion']) ? $campos['direccion'] : ''; ?>">
  </div>
  <button type="submit" class="btn btn-primary">Actualizar</button>
</form>

</div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

      