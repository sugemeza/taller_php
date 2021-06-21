<?php
//Rutas de los modelos y conexión
require_once('modelo/Solicitud.php');
require_once('modelo/CrudSolicitud.php');
require_once('modelo/DetalleSolicitud.php');
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
        $solicitud_id = $_REQUEST['solicitud_id'];//Id que este en el frm

        if($_REQUEST['solicitud_id']==""){//El id de solicitud debe estar vacio para que guarde el detalle
            $solicitud->setSolicitudId($_REQUEST['solicitud_id']);
            //Método guardar para la solicitud
            $solicitud_id = $crudSolicitud->guardar($solicitud);
        }

        //Insercion del detalle
        $detalleSolicitud = new DetalleSolicitud();
        $detalleSolicitud->setSolicitudId($solicitud_id);
        $detalleSolicitud->setServicioId($_REQUEST['servicios']);
        $detalleSolicitud->setPrecioUnitario($_REQUEST['precioUnitario']);
        $detalleSolicitud->setCantidad($_REQUEST['cantidad']);

        $crudSolicitud->guardarDetalle($detalleSolicitud);

        //$solicitudControlador = new SolicitudControlador();
        echo $solicitud_id;

    }

    public function listarDetalleSolicitud(){
        $crudSolicitud = new CrudSolicitud();
        $listaDetalle = $crudSolicitud->listarDetalleSolicitud($_REQUEST['solicitud_id']);
        require_once('vista/ListarDetalleSolicitud.php');
    }

    public function eliminar(){
        $crudSolicitud = new CrudSolicitud();
        echo $crudSolicitud->eliminar($_REQUEST['solicitud_id']);
        require_once('vista/ListarSolicitud.php');
    }

    public function eliminarDetalleSolicitud(){
        $crudSolicitud = new CrudSolicitud();
        echo $crudSolicitud->eliminarDetalleSolicitud($_REQUEST['detalleSolicitud_id']);
        echo $_REQUEST['detalleSolicitud_id'];
    }
    
}
?>