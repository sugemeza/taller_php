<?php

class Categoria{

    //Atributos de la tabla categorias
    private $categoria_id;
    private $nombre;

    //Constructor vacio
    public function __construct(){}

    //Métodos get y set
    public function setCategoriaId($categoria_id){
        $this->categoria_id = $categoria_id;
    }
    public function setCategoriaNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getCategoriaId(){
        return $this->categoria_id;
    }
    public function getCategoriaNombre(){
        return $this->nombre;
    }

}

?>