<?php

class ValidarAcceso{

    public function __construct(){}

    //Método de verificación
    //Consulta del usuario
    public function ValidarAcceso(){
        $Db = Db:: Conectar();//Cadena de conexión
        $sql = $Db->prepare('SELECT * FROM usuarios
        WHERE email=:email
        AND password=:password AND estado = 1');//Definir la consulta
        $sql->bindValue('email', $Usuario->getUsuarioEmail());//Asiganar valores a los parametros
        $sql->bindValue('password', $Usuario->getUsuarioPassword());

        try{
            $sql->execute();//Ejecución de la cosulta

            if($sql->rowCount()>0){
                echo "Existe";
            }
            else{
                echo "No existe";
            }
        }
        catch(Exception $e){//Captura de errores
            echo $e; //Visualizacion del error
        }

        Db::CerrarConexion($Db);//Función para desonectarse de la base de datos
       
    }
}

?>