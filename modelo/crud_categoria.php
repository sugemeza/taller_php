<?php

class Crud_Categoria{

    //Definir constructor vacio
    public function __construct(){}

    public function Listar_Categoria(){
        $Db = Db:: Conectar();//Cadena de conexión
        $sql = $Db->query('SELECT * FROM categorias');//Definir la consulta
        $sql->execute();//Ejecución de la cosulta
        Db::CerrarConexion($Db);//Función para desonectarse de la base de datos
        var_dump($sql->fetchAll());

    }
}

?>