<?php
//Rutas de los modelos y conexión
require_once('Conexion.php');
require_once('../modelo/Servicio.php');
require_once('../modelo/CrudServicio.php');

class ServicioControlador{
    public function __construct(){}

    public function ListarServicios(){
        $crudServicio = new CrudServicio();
        return $crudServicio->ListarServicios();
    }
}

$controladorPedido = new ServicioControlador();
//$controladorPedido->ListarServicio();

?>