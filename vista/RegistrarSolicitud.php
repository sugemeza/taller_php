<?php

$controladorPedido = new ServicioControlador();
$listaServicio = $controladorPedido->listarServicios();

//var_dump($listaServicio);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registrar Solicitud</title>
</head>
<body>
<div class="container">
    <div class="row">
        <form name="frmSolicitud" id="frmSolicitud" action="Index.php?c=Solicitud&accion=guardar" method="POST">
            <h3>Registrar Solicitud</h3>

            <!--Id de la solicitud-->
            <input type="text" name="solicitud_id" id="solicitud_id" readonly>
            <label for="solicitud_id">Código Solicitud</label>
            </br> </br> </br>


            <div class="input-field col s12">
                <select name="servicios" id="servicios" onchange="consultarPrecios(this.value)">
                    <option value="" disabled selected>Selección de servicios</option>
                    <?php
                    foreach ($listaServicio as $servicios){
                    ?>
                        <option value="<?php echo $servicios['servicio_id'] ?>"><?php echo $servicios['nombre']." $".$servicios['precio'] ?></option>
                    <?php
                    }
                    ?>
                </select>
                <label>Servicios</label>
            </div>

            <input type="text" name="precioUnitario" id="precioUnitario" readonly >
            <label for="precioUnitario">Precio Unitario</label>
            </br>

            <input type="number" name="cantidad" id="cantidad" min="1" >
            <label for="nombre">Cantidad</label>
            </br>

            <input type="number" name="precioTotal" id="precioTotal" readonly >
            <label for="precioTotal">Precio Total></Total></label>
            </br> </br> </br>

            <button type="submit" class="waves-effect waves-light btn-small">Guardar</button>
        </form>
    </div>
</div>

</body>
</html>