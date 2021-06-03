<?php
//Rutas de los modelos y conexión
require_once('../modelo/Categoria.php');
require_once('../modelo/CrudCategoria.php');

class CategoriaControlador{
    public function __construct(){}

    public function index(){
        require_once('vista/ListarCategoria.php');
    }

    public function listarCategorias(){
        $crudCategoria = new Crudcategoria();
        return $crudCategoria->listarCategorias();
    }

    public function guardar(){
        $crudCategoria = new CrudCategoria();
        $categoria = new Categoria(); 
        
        //Settear 
        $categoria->setCategoriaId(9);
        $categoria->setCategoriaNombre('masajes');

        //Método guardar de la clase curd categoria
        $crudCategoria->guardar($categoria);
    }
}

$categoriaControlador = new CategoriaControlador();
//$categoriaControlador->guardar();
?>