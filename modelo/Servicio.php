<?php

class Servicio{

    //Atributos de la tabla categorias
    private $servicio_id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $estado;

    //Constructor vacio
    public function __construct(){}

    //Métodos set de acceso de una propiedad (fijar)
    public function setServicioId($servicio_id){
        $this->categoria_id = $categoria_id;
    }
    public function setServicioNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setServicioDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    public function setServicioPrecio($precio){
        $this->precio = $precio;
    }
    public function setServicioEstado($estado){
        $this->estado = $estado;
    }

    //Métodos get permite acceder al valor de una propiedad (obtener)
    public function getCategoriaId(){
        return $this->categoria_id;
    }
    public function getCategoriaNombre(){
        return $this->nombre;
    }
    public function getServicioDescipcion(){
        return $this->descripcion;
    }
    public function getServicioPrecio(){
        return $this->precio;
    }
    public function getServicioEstado(){
        return $this->estado;
    }

}

?>