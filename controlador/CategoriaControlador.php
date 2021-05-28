<?php
//Rutas de los modelos y conexión
require_once('Conexion.php');
require_once('../modelo/Categoria.php');
require_once('../modelo/CrudCategoria.php');

class CategoriaControlador{
    public function __construct(){}

    public function ListarCategoria(){
        $crudCategoria = new Crudcategoria();
        var_dump($crudCategoria->ListarCategoria());
    }
}

$controladorPedido = new CategoriaControlador();
$controladorPedido->ListarCategoria();

?>