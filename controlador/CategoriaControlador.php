<?php
//Rutas de los modelos y conexión
require_once('modelo/Categoria.php');
require_once('modelo/CrudCategoria.php');

class CategoriaControlador{
    public function __construct(){}

    public function index(){
        $categoriaControlador = new CategoriaControlador();
        require_once('vista/ListarCategoria.php');
    }

    public function listarCategorias(){
        $crudCategoria = new Crudcategoria();
        return $crudCategoria->listarCategorias();
    }

    public function registrar(){
        require_once('vista/RegistrarCategoria.html');
    }

    public function guardar(){
        $crudCategoria = new CrudCategoria();
        $categoria = new Categoria(); 
        
        //Settear
        //Input nombre categoria 
        $categoria->setCategoriaNombre($_REQUEST['nombre']);

        //Método guardar de la clase curd categoria
        $crudCategoria->guardar($categoria);

        $this->index();
    }
}

//Solo esta a modo de prueba
//$categoriaControlador = new CategoriaControlador();
//$categoriaControlador->Guardar();
//$categoriaControlador->Index();
?>