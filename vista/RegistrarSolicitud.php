<?php

$controladorPedido = new ServicioControlador();
$listaServicio = $controladorPedido->listarServicios();

//var_dump($listaServicio);
?>
<div class="container">
    <div class="row">
        <form name="frmSolicitud" id="frmSolicitud" action="Index.php?c=Solicitud&accion=guardar" method="POST">
            <h3>Registrar Solicitud</h3>

            <!--Id de la solicitud-->
            <input type="text" name="solicitud_id" id="solicitud_id" readonly>
            <label for="solicitud_id">Código Solicitud</label>
            </br> </br> </br>


            <div class="input-field col s12">
                <select name="servicios" id="servicios" onchange="consultarPrecio(this.value)">
                    <option value="" selected>Selección de servicios</option>
                    <?php
                    foreach ($listaServicio as $servicios){
                    ?>
                        <option value="<?php echo $servicios['servicio_id'] ?>"><?php echo $servicios['nombre'] ?></option>
                    <?php
                    }
                    ?>
                </select>
                <label>Servicios</label>
            </div>

            <input type="text" name="precioUnitario" id="precioUnitario" readonly>
            <label for="precioUnitario">Precio Unitario</label>
            </br>

            <input type="number" name="cantidad" id="cantidad" onkeypress="calcularValorDetalle()" onkeyup="calcularValorDetalle()" onkeydown="calcularValorDetalle()" min="1" >
            <label for="nombre">Cantidad</label>
            </br>

            <input type="text" name="precioTotal" id="precioTotal" >
            <label for="precioTotal">Precio Total</Total></label>
            </br> </br> </br>

            <button type="submit" class="waves-effect waves-light btn-small">Guardar</button>
        </form>
    </div>
</div>
    <div id="detalleSolicitud">
    </div>
