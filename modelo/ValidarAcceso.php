<?php

class ValidarAcceso{

    public function __construct(){}

    //Método de verificación
    //Consulta del usuario
    public function ValidarAcceso(){
        $Db = Db:: Conectar();//Cadena de conexión
        $sql = $Db->query('SELECT * FROM usuarios
        WHERE email=:email
        AND password=:password');//Definir la consulta
        $sql->execute();//Ejecución de la cosulta
        Db::CerrarConexion($Db);//Función para desonectarse de la base de datos
        var_dump($sql->fetchAll());
    }
}

?>