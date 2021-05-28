<?php

class CrudServicio{

    //Definir constructor vacio
    public function __construct(){}

    public function ListarServicio(){
        $Db = Db:: Conectar();//Cadena de conexión
        $sql = $Db->query('SELECT * FROM servicios');//Definir la consulta
        $sql->execute();//Ejecución de la cosulta
        Db::CerrarConexion($Db);//Función para desonectarse de la base de datos
        return $sql->fetchAll();

    }
}

?>