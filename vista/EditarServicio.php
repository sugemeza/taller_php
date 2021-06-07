<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Editar Servicio</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <form name="frmServicio" id="frmServicio" action="Index.php?c=Servicio&accion=editar" method="POST">
                <h3>Editar Servicio</h3>
                <?php echo "Código " . $servicio['servicio_id'] ?>
                <input type="text" name="nombre" id="nombre" value="<?php echo $servicio['nombre'] ?>" >
                <label for="nombre">Nombre</label>
                </br>
                <input type="text" name="descripcion" id="descripcion" value="<?php echo $servicio['descripcion'] ?>" >
                <label for="descripcion">Descripción</label>
                </br>
                <input type="number" name="precio" id="precio" value="<?php echo $servicio['precio'] ?>" >
                <label for="precio">Precio</label>
                </br>
                </br>
                <!-- Switch -->
                <div class="switch">
                    <label>Estado</label>
                    </br>
                    <label>
                    Off
                    <!--estado no me esta trayendo la información-->
                    <input type="checkbox" id="estado" name="estado" for="estado" value="<?php echo $servicio['estado'] ?>">
                    <span class="lever"></span>
                    On
                    </label>
                </div>
                </br></br>
                <button class="waves-effect waves-light btn-small">Guardar</button> 
            </form>
        </div>
    </div>
    <script src="./Librerias/jQuery v3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
</html>