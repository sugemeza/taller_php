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
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($listaDetalle as $detalle){
                ?>
                    <tr>
                        <td><?php echo $detalle['detalleSolicitud_id']?></td>
                        <td><?php echo $detalle['servicio_id']?></td>
                        <td><?php echo $detalle['precioUnitario']?></td>
                        <td><?php echo $detalle['cantidad']?></td>
                    </tr>
                <?php    
                }
            ?>
            </tbody>
        </table>
    </div>
</div>