<?php
//Rutas de los modelos y conexión
require_once('Conexion.php');
require_once('../modelo/Categoria.php');
require_once('../modelo/CrudCategoria.php');

class CategoriaControlador{
    public function __construct(){}

    public function ListarCategorias(){
        $crudCategoria = new Crudcategoria();
        return $crudCategoria->ListarCategorias();
    }

    public function Guardar(){
        $CrudCategoria = new CrudCategoria();
        $Categoria = new Categoria(); 
        
        //Settear 
        $Categoria->setCategoriaId(91);
        $Categoria->setCategoriaNombre('masajes');

        //Método guardar de la clase curd categoria
        $CrudCategoria->Guardar($Categoria);
    }
}

$CategoriaControlador = new CategoriaControlador();
$CategoriaControlador->Guardar();
?>