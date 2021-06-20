<?php
require_once('controlador/SolicitudControlador.php');

//Creamos el objeto en la lista
$controladorPedido = new SolicitudControlador();
$listaSolicitud = $controladorPedido->listarSolicitudes();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Solicitudes</title>

</head>
<body>
<div class="container">
    <div class="row">
        <a class="waves-effect waves-light btn-small" href="Index.php?c=Solicitud&accion=registrar">Registrar Solicitud</a>
        <table class="highlight">
            <thead>
            <tr>
                <th>Código</th>
                <th>Responsable</th>
                <th>Fecha</th>
            </tr>
            </thead>

            <tbody>
            <?php

            foreach($listaSolicitud as $solicitud){
                ?>
                <tr>
                    <td>
                        <?php echo $solicitud['solicitud_id']; ?>
                    </td>
                    <td>
                        <?php echo $solicitud['usuario_id']; ?>
                    </td>
                    <td>
                        <?php echo $solicitud['fechaServicio']; ?>
                    </td>
                    <td>
                        <!--Esto serían metodos en el controlador que aun faltan por definir-->
                        <form name="frmEditar" id="frmEditar" action="Index.php?c=Solicitud&accion=editar" method="POST">

                            <!--type="botton" preguintar si se puede poner Type="button"-->
                            <!--Pendiente por poner el type hidden-->

                            <input type="hidden" name="solicitud_id" id="solicitud_id" value="<?php echo $solicitud['solicitud_id']; ?>"/>
                            <button type="submit">Editar</button>

                            <!--<i  class="Small material-icons">delete</i>
                            <i  class="Small material-icons">create</i>-->
                        </form>
                        <form name="frmEliminar" id="frmEliminar<?php echo $solicitud['solicitud_id']?>" action="Index.php?c=Solicitud&accion=eliminar" method="POST">

                            <input type="hidden" name="solicitud_id" id="solicitud_id" value="<?php echo $solicitud['solicitud_id']; ?>"/>

                            <button type="submit" onclick="eliminarSolicitud(<?php echo $solicitud['solicitud_id']; ?>)">Eliminar</button>
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
</body>
</html>