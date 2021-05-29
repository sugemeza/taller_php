<?php
require_once('../controlador/ServicioControlador.php');
$listaServicio = $controladroPedido->ListarServicios();
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

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>

    <?php
    
    foreach($listaServicio as $servicio){
       ?>
        <tr>
            <td>
            <?php echo $servicio['servicio_id']; ?>
            </td>
            <td>
            <?php echo $servicio['nombre']; ?>
            </td>
        </tr>
       <?php
    }
    ?>

    </tbody>
</table>
    
</body>
</html>