<?php
//Rutas de los modelos y conexión
require_once('Conexion.php');
require_once('../modelo/Servicio.php');
require_once('../modelo/CrudServicio.php');

class ServicioControlador{
    public function __construct(){}

    public function ListarServicio(){
        $crudServicio = new CrudServicio();
        var_dump($crudServicio->ListarServicio());
    }
}

$controladorPedido = new ServicioControlador();
$controladorPedido->ListarServicio();

?>