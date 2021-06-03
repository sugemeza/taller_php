<?php
require_once('../controlador/CategoriaControlador.php');

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

    <title>Categoria</title>

</head>
<body>

<div class="container">
    <div class="row"> 
        <table class="highlight">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
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
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
</div>
<!-- Compiled and minified JavaScript -->
  <script src="./Librerias/jQuery v3.6.0.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script type="text/javascript" src="./js/app.js"></script>    
</body>
</html>