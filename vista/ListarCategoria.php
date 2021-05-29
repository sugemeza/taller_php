<?php
require_once('../controlador/CategoriaControlador.php');
$listaCategoria = $controladorPedido->ListarCategorias();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border="1">
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
    
</body>
</html>