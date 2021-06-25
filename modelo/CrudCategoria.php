<?php
require_once('controlador/Conexion.php');
class CrudCategoria {

    //Definir constructor vacio
    public function __construct(){}

    public function listarCategorias(){
        $Db = Db:: Conectar();//Cadena de conexión
        $sql = $Db->query('SELECT * FROM categorias');//Definir la consulta
        $sql->execute();//Ejecución de la cosulta
        Db::CerrarConexion($Db);//Función para desonectarse de la base de datos
        return $sql->fetchAll();

    }

    public function guardar($categoria){

        $mensaje = "";
        $Db = Db:: Conectar();//Cadena de conexión
        //Definir sentencia sql
        //El prepare hace que el cambio de un valor no tenga efecto 
        $sql = $Db->prepare('INSERT INTO 
        categorias(categoria_id,nombre,descripcion) 
        VALUES(:categoria_id,:nombre,:descripcion)');

        $sql->bindValue('categoria_id',$categoria->getCategoriaId());//Se asigna parametro y se guarda en memoria
        $sql->bindValue('nombre',$categoria->getCategoriaNombre());
        $sql->bindValue('descripcion',$categoria->getCategoriaDescripcion());

        //Filtro de la ejecucion de las consultas
        try{//Ejecutar la sentencia sql definida contenida en la variable $sql
            $sql->execute();  
            $mensaje = "Registro Exitoso";
        }
        catch(Exception $e){//Captura error
            $mensaje = $e;
        }

        Db::CerrarConexion($Db);//Cerrar la conexion con la Db
        return $mensaje;//Retorna mensaje
    }

    public function buscarCategoria($categoria){//Verficar si tiene que ser categoria_id o solo $categoria
        $Db = Db:: Conectar();//Cadena de conexión
        $sql = $Db->query("SELECT * FROM categorias
        WHERE categoria_id=$categoria");//Definir la consulta
        $sql->execute();//Ejecución de la cosulta
        Db::CerrarConexion($Db);//Función para desonectarse de la base de datos
        return $sql->fetch();//Obtener el registro 

    }

  
    public function modificar($categoria) {
        
        $mensaje = "";
        $Db = Db:: Conectar();//Cadena de conexión
        //Definir sentencia sql
        //El prepare hace que el cambio de un valor no tenga efecto 
        $sql = $Db->prepare("UPDATE 
        categorias SET nombre=:nombre
        where categoria_id=:categoria_id,:descripcion");

        $sql->bindValue('categoria_id',$categoria->getCategoriaId());//El id esta autoincrementable
        $sql->bindValue('nombre',$categoria->getCategoriaNombre());
        $sql->bindValue('descripcion',$categoria->getCategoriaDescripcion());

        //Filtro de la ejecucion de las consultas
        try{//Ejecutar la sentencia sql definida contenida en la variable $sql
            
            $sql->execute();  
            $mensaje = "Registro Exitoso";
        }
        catch(Exception $e){//Captura error
            $mensaje = $e;
        }

        Db::CerrarConexion($Db);//Cerrar la conexion con la Db
        return $mensaje;//Retorna mensaje
    }

    public function eliminar($categoria_id) {
        
        $mensaje = "";
        $Db = Db:: Conectar();//Cadena de conexión

        $sql = $Db->prepare("DELETE FROM categorias
        where categoria_id=$categoria_id");

        //Filtro de la ejecucion de las consultas
        try{//Ejecutar la sentencia sql definida contenida en la variable $sql
            
            $sql->execute();  
            $mensaje = "Eliminación Exitoso";
        }
        catch(Exception $e){//Captura error
            $mensaje = $e;
        }

        Db::CerrarConexion($Db);//Cerrar la conexion con la Db
        return $mensaje;//Retorna mensaje
    }
}
