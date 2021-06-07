<?php

class CrudServicio{

    //Definir constructor vacio
    public function __construct(){}

    public function listarServicios(){
        $Db = Db:: Conectar();//Cadena de conexión
        $sql = $Db->query('SELECT * FROM servicios');//Definir la consulta
        $sql->execute();//Ejecución de la cosulta
        Db::CerrarConexion($Db);//Función para desonectarse de la base de datos
        return $sql->fetchAll();//Método PDO para obtener todas las consultas de la Db

    }

    public function guardar($servicio){

        $mensaje = "";
        $Db = Db:: Conectar();//Cadena de conexión
        //Definir sentencia sql
        //El prepare hace que el cambio de un valor no tenga efecto 
        $sql = $Db->prepare('INSERT INTO 
        servicios(servicio_id,nombre,categoria_id,descripcion,precio,estado) 
        VALUES(:servicio_id,:nombre,:categoria_id,:descripcion,:precio,:estado)');

        $sql->bindValue('servicio_id',$servicio->getServicioId());//Se asigna parametro y se guarda en memoria
        $sql->bindValue('nombre',$servicio->getServicioNombre());
        $sql->bindValue('categoria_id',$servicio->getCategoriaId());
        $sql->bindValue('descripcion',$servicio->getServicioDescipcion());
        $sql->bindValue('precio',$servicio->getServicioPrecio());
        $sql->bindValue('estado',$servicio->getServicioEstado());

        //Filtro de la ejecucion de las consultas
        try{//Ejecutar la sentencia sql definida contenida en la variable $sql
            $sql->execute();
              
            //Ajustar esto como una alerta 
            $mensaje = "Registro Exitoso";
        }
        catch(Exception $e){//Captura error
            $mensaje = $e;
        }

        Db::CerrarConexion($Db);//Cerrar la conexion con la Db
        return $mensaje;//Retorna mensaje
    }

    public function buscarServicio($servicio_id){
        $Db = Db:: Conectar();//Cadena de conexión
        $sql = $Db->query("SELECT * FROM servicios
        WHERE servicio_id=$servicio_id ");//Definir la consulta
        $sql->execute();//Ejecución de la cosulta
        Db::CerrarConexion($Db);//Función para desonectarse de la base de datos
        return $sql->fetch();//Método PDO para obtener todas las consultas de la Db

    }
}

?>