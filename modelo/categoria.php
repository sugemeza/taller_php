<?php

class Categoria{

    //Atributos de la tabla categorias
    private $categoria_id;
    private $nombre;

    //Constructor vacio
    public function __construct(){}

    //Métodos get y set
    public function setCategoria_id($categoria_id){
        $this->categoria_id = $categoria_id;
    }
    public function setCategoria_nombre($nombre){
        $this->nombre = $nombre;
    }
    public function getCategoria_id(){
        return $this->categoria_id;
    }
    public function getCategoria_nombre(){
        return $this->nombre;
    }

}

?>