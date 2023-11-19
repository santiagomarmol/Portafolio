<?php

include 'config/conexion.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="aseest/estilos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <div class="card" style="width: 1200px;">
    <div class="card-header">
      <a href="agregar.php" class="btn btn-primary">Agregar</a>
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Correo</th>
            <th scope="col2">Aciones</th>

          </tr>
        </thead>
        <tbody>
          <?php $sql = $conexion->query("SELECT * FROM empleado");
          while ($datos = $sql->fetch_object()) {

          ?>
            <tr>
              <th scope="row"><?php echo $datos->id ?></th>
              <td><?php echo $datos->nombres ?></td>
              <td><?php echo $datos->apellido ?></td>
              <td><?php echo $datos->correo ?></td>
              <td>
                <a href="models/editar.php?id=<?php echo $datos->id  ?>" class="btn btn-primary">Editar</a>
                -
                <a href="models/eliminar.php?id=<?php echo $datos->id  ?>" class="btn btn-danger">Eliminar</a>
              </td>
            </tr>
            </td>
            <td>
            <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>