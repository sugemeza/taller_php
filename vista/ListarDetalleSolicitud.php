<?php 

?>
<div class="container">
    <div class="row">
        <table class="highlight">
            <thead>
                <tr>
                    <th>Código Detalle</th>
                    <th>Código Servicio</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Precio Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $montoTotal = 0;
                foreach($listaDetalle as $detalle){
                ?>
                    <tr>
                        <td><?php echo $detalle['detalleSolicitud_id']?></td>
                        <td><?php echo $detalle['servicio_id']?></td>
                        <td><?php echo $detalle['precioUnitario']?></td>
                        <td><?php echo $detalle['cantidad']?></td>
                        <td><?php echo $detalle['cantidad']*$detalle['precioUnitario']?></td>
                        <td>
                        <button type="button" onclick="eliminarDetalle(<?php echo $detalle['detalleSolicitud_id']?>)">Eliminar</button>
                        </td>
                    </tr>
                <?php 
                    $montoTotal = $montoTotal + ($detalle['cantidad']*$detalle['precioUnitario']);   
                }
            ?>
            <tr>
            <td colspan="4" align="right">Monto Total</td>
            <td align="right"><?php echo $montoTotal?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>