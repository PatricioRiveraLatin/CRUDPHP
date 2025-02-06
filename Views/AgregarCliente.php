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
    <h1 class="text-center" style="background-color: black; color:white">Agregar</h1>
</div>
        <br>
    <div class="container">
<form action="../CRUD/InsertarDatos.php" method="Post">
  <div class="mb-3">
    <label class="form-label">Run</label>
    <input type="text" class="form-control" name="run">
  </div>

  <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre">
  </div>

  <div class="mb-3">
    <label class="form-label">Fono</label>
    <input type="text" class="form-control" name="fono">
  </div>

  <div class="mb-3">
    <label class="form-label">Dirección</label>
    <input type="text" class="form-control" name="direccion">
  </div>
<!--Boton centrado-->
  <div class="text-center">
  <button type="submit" class="btn btn-danger">Guardar</button>
  <a href="../Index.php" class="btn btn-dark">Inicio</a>
  </div>

</form>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>