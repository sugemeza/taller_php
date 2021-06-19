<?php

class DetalleSolicitud {

    private $detalleSolicitud_id;
    private $solicitud_id;
    private $servicio_id;
    private $cantidad;
    private $precioUnitario;

    public function __construct(){}

    //Métodos set
    public function setDetalleSolicitudId($detalleSolicitud_id){
        $this->detalleSolicitud_id = $detalleSolicitud_id;
    }
    public function setSolicitudId($solicitud_id){
        $this->solicitud_id = $solicitud_id;
    }
    public function setServicioId ($servicio_id){
        $this->servicio_id = $servicio_id;
    }
    public function setDetalleSolicitudCantidad($cantidad){
        $this->cantidad = $cantidad;
    }
    public function setDetalleSolicitudPrecioUnitario($precioUnitario){
        $this->precioUnitario = $precioUnitario;
    }

    //Métodos get
    public function getDetalleSolicitudId(){
        return $this->detalleSolicitud_id;
    }
    public function getSolicitudId(){
        return $this->solicitud_id;
    }
    public function getServicioId(){
        return $this->servicio_id;
    }
    public function getDetalleSolicitudCantidad(){
        return $this->cantidad;
    }
    public function getDetalleSolicitudPrecioUnitario(){
        return $this->precioUnitario;
    }
}
?>