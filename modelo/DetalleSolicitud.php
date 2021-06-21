<?php

class DetalleSolicitud{
    private $detalleSolicitud_id;
    private $solicitud_id;
    private $servicio_id;
    private $precioUnitario;
    private $cantidad;

    
    public function __construct(){}

    //Set
    public function setDetalleSolicitudId($detalleSolicitud_id){
        $this->detalleSolicitud_id = $detalleSolicitud_id;
    }
    public function setSolicitudId($solicitud_id){
        $this->solicitud_id = $solicitud_id;
    }
    public function setServicioId($servicio_id){
        $this->servicio_id = $servicio_id;
    }
    public function setPrecioUnitario($precioUnitario){
        $this->precioUnitario = $precioUnitario;
    }
    public function setCantidad($cantidad){
        $this->cantidad = $cantidad;
    }
     
    //Get
    public function getDetalleSolicitudId(){
        return $this->detalleSolicitud_id;
    }
    public function getSolicitudId(){
        return $this->solicitud_id;
    }
    public function getServicioId(){
        return $this->servicio_id;
    }
    public function getPrecioUnitario(){
        return $this->precioUnitario;
    }
    public function getCantidad(){
        return $this->cantidad;
    }
     
     




}
