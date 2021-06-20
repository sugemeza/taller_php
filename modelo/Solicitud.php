<?php

class Solicitud {

    //Atributos
    private $solicitud_id;
    private $usario_id;
    private $fechaServicio;

    public function __construct(){}

    //Métodos set
    public function setSolicitudId($solicitud_id){
        $this->solicitud_id = $solicitud_id;
    }
    public function setUsuarioId($usario_id){
        $this->usurio_id = $usario_id;
    }
    public function setSolicitudFechaServicio($fechaServicio){
        $this->fechaServicio = $fechaServicio;
    }

    //Métodos get
    public function getSolicitudId(){
        return $this->solicitud_id;
    }
    //Puede generar problemas el metodo con el mismo nombre que esta en otra clase
    public function getUsuarioId(){
        return $this->usurio_id;
    }
    public function getSolicitudFechaServicio(){
        return $this->fechaServicio;
    }
    public function getUsuarioPassword(){
        return $this->password;
    }


}

?>