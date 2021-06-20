<?php
//Rutas de los modelos y conexión
require_once('modelo/Solicitud.php');
require_once('modelo/CrudSolicitud.php');
require_once('controlador/ServicioControlador.php');


class SolicitudControlador {
    public function __construct(){}

    public function index(){
        $solicitudControlador = new SolicitudControlador();
        require_once('vista/ListarSolicitud.php');
    }

    public function registrar(){ //Vista del formulario para registrar la solicitud
        require_once('vista/RegistrarSolicitud.php');
    }

    public function listarSolicitudes(){
        $crudSolicitud = new CrudSolicitud();
        return $crudSolicitud->listarSolicitudes();
    }

    public function guardar(){
        $crudSolicitud = new CrudSolicitud();
        $solicitud = new Solicitud();
        
        $solicitud->setSolicitudId($_REQUEST['solicitud_id']);
        //$solicitud->setUsuarioId($_REQUEST['usuario_id']);

        //Método guardar para la solicitud
        echo $crudSolicitud->guardar($solicitud);

        //$this->index();
    }

    public function eliminar(){
        $crudSolicitud = new CrudSolicitud();
        echo $crudSolicitud->eliminar($_REQUEST['solicitud_id']);
        require_once('vista/ListarSolicitud.php');
    }

}
?>