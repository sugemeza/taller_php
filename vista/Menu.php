<?php

//Por alguna extraña razon los riquire_one no funcionan si no estoy logiado

if(isset($_SESSION['rol_id'])){ //Verificacion de rol

    if($_SESSION['rol_id'] == 1){
        ?>
        <nav>
            <div class="nav-wrapper">
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="Index.php?c=Categoria">Categorías</a></li>
                    <li><a href="Index.php?c=Servicio">Servicios</a></li>
                    <li><a href="Index.php?c=Solicitud">Solicitudes</a></li>
                    <li><a href="Index.php?c=ValidarAcceso&accion=cerrarSesion"><button type="submit" class="waves-effect waves-light btn-small">Cerrar Sesión</button></a></li>
                </ul>
            </div>
        </nav>
        <?php
    }
    elseif ($_SESSION['rol_id'] == 2){
        ?>
        <nav>
            <div class="nav-wrapper">
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="Index.php?c=Solicitud">Solicitudes</a></li>
                    <li><a href="Index.php?c=ValidarAcceso&accion=cerrarSesion"><button type="submit" class="waves-effect waves-light btn-small">Cerrar Sesión</button></a></li>
                </ul>
            </div>
        </nav>
        <?php
    }
    elseif ($_SESSION['rol_id'] == 3){
        ?>
        <nav>
            <div class="nav-wrapper">
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="Index.php?c=Categoria">Categorías</a></li>
                    <li><a href="Index.php?c=Servicio">Servicios</a></li>
                    <li><a href="Index.php?c=Solicitud">Solicitudes</a></li>
                    <li><a href="Index.php?c=ValidarAcceso&accion=cerrarSesion"><button type="submit" class="waves-effect waves-light btn-small">Cerrar Sesión</button></a></li>
                </ul>
            </div>
        </nav>
        <?php
    }
    else{
        header('Location:../Index.php');
    }

}
?>
