<?php
//Rutas de los modelos y conexión
require_once('modelo/Servicio.php');
require_once('modelo/CrudServicio.php');

class ServicioControlador{
    public function __construct(){}

    public function index(){
        $servicioControlador = new ServicioControlador();
        require_once('vista/ListarServicio.php');
    }

    public function listarServicios(){
        $crudServicio = new CrudServicio();
        return $crudServicio->listarServicios();
    }

    public function registrar(){
        require_once('vista/RegistrarServicio.html');
    }

    public function guardar(){
        $crudServicio = new CrudServicio();
        $servicio = new Servicio();

        if (!isset($_REQUEST['estado'])) {
            $_REQUEST['estado'] = 'off';
        }

        //Settear 
        $servicio->setServicioNombre($_REQUEST['nombre']);
        $servicio->setCategoriaId(1);
        $servicio->setServicioDescripcion($_REQUEST['descripcion']);
        $servicio->setServicioPrecio($_REQUEST['precio']);
        $servicio->setServicioEstado($_REQUEST['estado'] === 'on' ? true : false);

        //Método guardar de la clase curd categoria
        echo $crudServicio->guardar($servicio);

        $this->index();
    }
}

/*Solo esta a modo de prueba
$servicioControlador = new ServicioControlador();
$servicioControlador->Guardar();
$servicioControlador->Index();*/
?>