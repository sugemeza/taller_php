<?php
//Rutas de los modelos y conexión
require_once('Conexion.php');
require_once('../modelo/Servicio.php');
require_once('../modelo/CrudServicio.php');

class ServicioControlador{
    public function __construct(){}

    public function ListarServicios(){
        $CrudServicio = new CrudServicio();
        return $CrudServicio->ListarServicios();
    }

    public function Guardar(){
        $CrudServicio = new CrudServicio();
        $Servicio = new Servicio(); 
        
        //Settear 
        $Servicio->setServicioId(1);
        $Servicio->setServicioNombre(1);
        $Servicio->setCategoriaId(1);
        $Servicio->setServicioDescripcion(1);
        $Servicio->setServicioPrecio(1);
        $Servicio->setServicioEstado(1);

        //Método guardar de la clase curd categoria
        echo $CrudServicio->Guardar($Servicio);
    }
}

$ServicioControlador = new ServicioControlador();
$ServicioControlador->Guardar();
?>