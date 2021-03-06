<?php
//Rutas de los modelos y conexión
require_once('modelo/Servicio.php');
require_once('modelo/CrudServicio.php');
require_once('controlador/CategoriaControlador.php');

class ServicioControlador {
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
        require_once('vista/RegistrarServicio.php');
    }

    public function guardar(){
        $crudServicio = new CrudServicio();
        $servicio = new Servicio();

        if (!isset($_REQUEST['estado'])) {
            $_REQUEST['estado'] = 'off';
        }

        //Settear 
        $servicio->setServicioNombre($_REQUEST['nombre']);
        $servicio->setCategoriaId($_REQUEST['categorias']);
        $servicio->setServicioDescripcion($_REQUEST['descripcion']);
        $servicio->setServicioPrecio($_REQUEST['precio']);
        $servicio->setServicioEstado($_REQUEST['estado'] === 'on' ? true : false);

        //Método guardar de la clase curd categoria
        echo $crudServicio->guardar($servicio);

        $this->index();
    }

    public function editar(){
        $crudServicio = new CrudServicio();
        $servicio = $crudServicio->buscarServicio($_REQUEST['servicio_id']);
        //var_dump($servicio);Verificacion del contenido del arreglo desde la base de datos
        require_once('vista/EditarServicio.php');
    }

    public function modificar(){
        $crudServicio = new CrudServicio();
        $servicio = new Servicio();

        if (!isset($_REQUEST['estado'])) {
            $_REQUEST['estado'] = 'off';
        }

        //Settear 
        $servicio->setServicioId($_REQUEST['servicio_id']);
        $servicio->setServicioNombre($_REQUEST['nombre']);
        $servicio->setCategoriaId($_REQUEST['categotia_id']);
        $servicio->setServicioDescripcion($_REQUEST['descripcion']);
        $servicio->setServicioPrecio($_REQUEST['precio']);
        $servicio->setServicioEstado($_REQUEST['estado'] === 'on' ? true : false);

        //Método guardar de la clase curd categoria
        $crudServicio->modificar($servicio);

        $this->index();
    }

    
    public function eliminar(){
        $crudServicio = new CrudServicio();
        $crudServicio->eliminar($_REQUEST['servicio_id']);
    }

    
    public function consultarPrecio(){
        $crudServicio = new CrudServicio();
        //Impresion del precio que se consulta a la base de datos
        echo $crudServicio->consultarPrecio($_REQUEST['servicio'])['precio'];
    }
}

?>