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
}

$controladorPedido = new CategoriaControlador();
//$controladorPedido->ListarCategoria();

?>