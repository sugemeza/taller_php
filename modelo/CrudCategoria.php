<?php

class CrudCategoria{

    //Definir constructor vacio
    public function __construct(){}

    public function ListarCategorias(){
        $Db = Db:: Conectar();//Cadena de conexión
        $sql = $Db->query('SELECT * FROM categorias');//Definir la consulta
        $sql->execute();//Ejecución de la cosulta
        Db::CerrarConexion($Db);//Función para desonectarse de la base de datos
        return $sql->fetchAll();

    }

    public function Guardar($categoria){

        $mensaje = "";
        $Db = Db:: Conectar();//Cadena de conexión
        //Definir sentencia sql
        //El prepare hace que el cambio de un valor no tenga efecto 
        $sql = $Db->prepare('INSERT INTO 
        categorias(categoria_id,nombre) 
        VALUES(:categoria_id,:nombre)');

        $sql->bindValue('categoria_id',$categoria->getCategoriaId());//Se asigna parametro y se guarda en memoria
        $sql->bindValue('nombre',$categoria->getCategoriaNombre());

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
}

?>