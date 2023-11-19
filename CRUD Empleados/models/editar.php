<?php

include '../config/conexion.php';
$id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../aseest/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="card" style="width: 50rem;">
        <div class="card-header">
            <h2>Editar Empleado</h2>
        </div>
        <div class="card-body">
            <form action="actualizar.php" method="post">
                <?php $sql = $conexion->query("SELECT * FROM empleado WHERE id = $id");
                while ($datos = $sql->fetch_object()) {

                ?>
                    <div class="mb-3">
                        <input type="hidden" name="id" class="form-control" placeholder="Nombre" value="<?php echo $datos->id ?>">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="<?php echo $datos->nombres ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellido</label>
                        <input type="text" name="apellido" class="form-control" placeholder="Apellido" value="<?php echo $datos->apellido ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correo</label>
                        <input type="email" name="correo" class="form-control" placeholder="correo" value="<?php echo $datos->correo ?>">
                    </div>
                    <button type="submit" class="btn btn-secondary">Enviar</button>
                <?php } ?>
            </form>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>