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
        
        echo 'esta entrando';
        //Settear
        //Input nombre categoria 
        $categoria->setCategoriaNombre($_REQUEST['nombre']);
        $categoria->setCategoriaDescripcion($_REQUEST['descripcion']);

        //Método guardar de la clase curd categoria
        $crudCategoria->guardar($categoria);

        $this->index();
    }

    public function editar(){
        $crudCategoria = new CrudCategoria();
        $categoria = $crudCategoria->buscarCategoria($_REQUEST['categoria_id']);
        //var_dump($categoria); Verificacion del contenido del arreglo desde la base de datos
        require_once('vista/EditarCategoria.php');
    }

    public function modificar(){//Actualización de la Db
        $crudCategoria = new CrudCategoria();
        $categoria = new Categoria(); 
        
        //Settear
        //Input nombre categoria, el id no se va a modificar
        $categoria->setCategoriaId($_REQUEST['categoria_id']);
        $categoria->setCategoriaNombre($_REQUEST['nombre']);
        $categoria->setCategoriaDescripcion($_REQUEST['descripcion']);

        //Método guardar de la clase curd categoria
        $crudCategoria->modificar($categoria);

        $this->index();
    }
    
    public function eliminar(){
        $crudCategoria = new CrudCategoria();
        echo $crudCategoria->eliminar($_REQUEST['categoria_id']);
        require_once('vista/Listarcategoria.php');
    }
}
?>