<?php
require_once('controlador/SolicitudControlador.php');

//Creamos el objeto en la lista
$controladorPedido = new SolicitudControlador();
$listaSolicitud = $controladorPedido->listarSolicitudes();

?>
<div class="container">
    <div class="row">
        <a class="waves-effect waves-light btn-small" href="Index.php?c=Solicitud&accion=registrar">Registrar Solicitud</a>
        <table class="highlight">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Responsable</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php

                foreach ($listaSolicitud as $solicitud) {
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
                            <form name="frmEliminar" id="frmEliminar<?php echo $solicitud['solicitud_id'] ?>" action="Index.php?c=Solicitud&accion=eliminar" method="POST">

                                <input type="hidden" name="solicitud_id" id="solicitud_id" value="<?php echo $solicitud['solicitud_id']; ?>" />

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