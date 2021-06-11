<?php
require_once('controlador/ServicioControlador.php');

//Creamos el objeto en la lista
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/Funciones.js"></script>

    <title>Servicio</title>

</head>
<body>
<div class="container">
    <div class="row">
        <a class="waves-effect waves-light btn-small" href="Index.php?c=Servicio&accion=registrar">Registrar Servicio</a>
        <table class="highlight">
            <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Acciones</th>
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
                    <td>
                        <form name="frmEditar" id="frmEditar" action="Index.php?c=Servicio&accion=editar" method="POST">

                            <!--type="botton" preguintar si se puede poner Type="button" si se puede porner como un botón
                            pero el cursor se pone como si fuese un texto-->

                            <input type="hidden" name="servicio_id" id="servicio_id" value="<?php echo $servicio['servicio_id']; ?>"/>
                            <button type="submit">Editar</button>
                            <!--<i  class="Small material-icons">create</i>-->
                        </form>

                        <form name="frmEliminar" id="frmEliminar<?php echo $servicio['servicio_id']?>" action="Index.php?c=Servicio&accion=eliminar" method="POST">

                            <input type="hidden" name="servicio_id" id="servicio_id" value="<?php echo $servicio['servicio_id']; ?>"/>

                            <button type="submit" onclick="eliminarServicio(<?php echo $servicio['servicio_id']; ?>)">Eliminar</button>
                            <!--<i  class="Small material-icons">delete</i>-->
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!--Información que consegui de datatable
  <script type="application/javascript">
  $(document).ready( function () {
      $('#theTable').DataTable({
          ajax: '/get_data.php',
      });
  } );-->
</script>
</body>
</html>