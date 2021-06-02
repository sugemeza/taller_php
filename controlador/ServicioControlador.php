<?php
//Rutas de los modelos y conexión
require_once('Conexion.php');
require_once('../modelo/Servicio.php');
require_once('../modelo/CrudServicio.php');

class ServicioControlador{
    public function __construct(){}

    public function listarServicios(){
        $crudServicio = new CrudServicio();
        return $crudServicio->listarServicios();
    }

    public function guardar(){
        $crudServicio = new CrudServicio();
        $servicio = new Servicio(); 
        
        //Settear 
        $servicio->setServicioNombre('t');
        $servicio->setCategoriaId(3);
        $servicio->setServicioDescripcion('t');
        $servicio->setServicioPrecio(10);
        $servicio->setServicioEstado(1);

        //Método guardar de la clase curd categoria
        echo $crudServicio->guardar($servicio);
    }
}

$servicioControlador = new ServicioControlador();
$servicioControlador->guardar();
?>