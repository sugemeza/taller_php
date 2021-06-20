<?php
require_once('controlador/ServicioControlador.php');

//Creamos el objeto en la lista
$controladorPedido = new ServicioControlador();
$listaServicio = $controladorPedido->listarServicios();
?>

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
                foreach ($listaServicio as $servicio) {
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

                                <input type="hidden" name="servicio_id" id="servicio_id" value="<?php echo $servicio['servicio_id']; ?>" />
                                <button type="submit">Editar</button>
                            </form>

                            <form name="frmEliminar" id="frmEliminar<?php echo $servicio['servicio_id'] ?>" action="Index.php?c=Servicio&accion=eliminar" method="POST">

                                <input type="hidden" name="servicio_id" id="servicio_id" value="<?php echo $servicio['servicio_id']; ?>" />

                                <button type="submit" onclick="eliminarServicio(<?php echo $servicio['servicio_id']; ?>)">Eliminar</button>
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