<?php
require_once('controlador/CategoriaControlador.php');

//Creamos el objeto en la lista
$controladorPedido = new CategoriaControlador();
$listaCategoria = $controladorPedido->listarCategorias();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/FuncionesCategoria.js"></script>

    <title>Categoria</title>

</head>
<body>
    <div class="container">
        <div class="row">
            <a class="waves-effect waves-light btn-small" href="Index.php?c=Categoria&accion=registrar">Registrar Categoria</a>  
            <table class="highlight">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    
                    foreach($listaCategoria as $categoria){
                    ?>
                        <tr>
                            <td>
                            <?php echo $categoria['categoria_id']; ?>
                            </td>
                            <td>
                            <?php echo $categoria['nombre']; ?>
                            </td>
                            <td>
                                <form name="frmEditar" id="frmEditar" action="Index.php?c=Categoria&accion=editar" method="POST">

                                <!--type="botton" preguintar si se puede poner Type="button"-->
                                <!--Pendiente por poner el type hidden-->

                                <input type="hidden" name="categoria_id" id="categoria_id" value="<?php echo $categoria['categoria_id']; ?>"/>
                                <button type="submit">Editar</button>

                                <!--<i  class="Small material-icons">delete</i>
                                <i  class="Small material-icons">create</i>-->
                                </form>
                                <form name="frmEliminar" id="frmEliminar<?php echo $categoria['categoria_id']?>" action="Index.php?c=Categoria&accion=eliminar" method="POST">

                                <input type="hidden" name="categoria_id" id="categoria_id" value="<?php echo $categoria['categoria_id']; ?>"/>
                               
                                <button type="submit" onclick="eliminarCategoria(<?php echo $categoria['categoria_id']; ?>)">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>