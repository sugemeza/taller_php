<?php
$controladorPedido = new CategoriaControlador();
$listaCategoria = $controladorPedido->listarCategorias();

//var_dump($listaCategoria);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Registrar Servicio</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <form name="frmServicio" id="frmServicio" action="Index.php?c=Servicio&accion=guardar" method="POST">
                <h3>Registrar Servicio</h3>
                <input type="text" name="nombre" id="nombre" >
                <label for="nombre">Nombre</label>
                </br> </br> </br>

                <div class="input-field col s12">
                    <select name="categorias" id="categorias">
                        <option value="" disabled selected>Selección de categoría</option>
                        <?php
                    foreach ($listaCategoria as $categoria){
                    ?>
                        <option value="<?php echo $categoria['categoria_id'] ?>"><?php echo $categoria['nombre']?></option>
                        <?php
                    }
                    ?>
                    </select>
                    <label>Categoría</label>
                </div>

                <input type="text" name="descripcion" id="descripcion" >
                <label for="descripcion">Descripción</label>
                </br>
                <input type="number" name="precio" id="precio" >
                <label for="precio">Precio</label>
                </br>
                </br>
                <!-- Switch -->
                <div class="switch">
                    <label>Estado</label>
                    </br>
                    <label>
                    Off
                    <input type="checkbox" id="estado" name="estado" for="estado">
                    <span class="lever"></span>
                    On
                    </label>
                </div>
                </br></br>
                <button type="submit" class="waves-effect waves-light btn-small">Guardar</button> 
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>