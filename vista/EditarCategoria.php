<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Editar Categoría</title>
</head>
<body>
    <div class="container">
        <div class="row"> 
            <h3>Editar Categoría</h3>
            <form name="frmCategoria" id="frmCategoria" action="Index.php?c=Categoria&accion=editar" method="POST">
                <?php echo "Código " . $categoria['categoria_id'] ?>
                <input type="text" name="nombre" id="nombre" value="<?php echo $categoria['nombre'] ?>"/>
                <label for="nombre">Nombre</label>
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