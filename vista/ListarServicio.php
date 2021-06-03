<?php
require_once('../controlador/ServicioControlador.php');

$controladorPedido = new ServicioControlador();
$listaServicio = $controladorPedido->listarServicios();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../css/style.css">
   
    <title>Servicio</title>

 </head>
<body>
    <div class="container">
        <div class="row"> 
            <table class="striped">
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
                            <td>
                            <?php echo $servicio['categoria_id']; ?>
                            </td>
                            <td>
                            <?php echo $servicio['descripcion']; ?>
                            </td>
                            <td>
                            <?php echo $servicio['precio']; ?>
                            </td>
                            <td>
                            <?php echo $servicio['estado']; ?>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>

  <script src="./Librerias/jQuery v3.6.0.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script type="text/javascript" src="./js/app.js"></script>    
</body>
</html>