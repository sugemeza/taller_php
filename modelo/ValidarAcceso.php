<?php

require_once('controlador/Conexion.php');

class ValidarAcceso {

    public function __construct(){}

    //Método de verificación
    //Consulta del usuario
    public function validarAcceso($usuario){
        $usuario = new Usuario();
        
        $Db = Db::Conectar();//Cadena de conexión
        $sql = $Db->prepare('SELECT * FROM usuarios
        WHERE email=:email AND password=:password
         AND estado = 1');//Definir la consulta
        $sql->bindValue('email', $usuario->getUsuarioEmail());//Asiganar valores a los parametros
        $sql->bindValue('password', $usuario->getUsuarioPassword());

        $usuario->setUsuarioExiste(0); //Asignacion de cero al parametro existe

        try{
            $sql->execute();//Ejecución de la cosulta

            if($sql->rowCount()>0){
                $datosUsuario = $sql->fetch();//Almacena los datos de la consulta
                $usuario->setUsuarioId($datosUsuario['usuario_id']);
                $usuario->setRolId($datosUsuario['rol_id']);
                $usuario->setUsuarioPassword('');//Asignacion de nulo a la contraseña

            }
        }
        catch(Exception $e){//Captura de errores
            echo $e->getMessage(); //Visualizacion del error
        }

        Db::CerrarConexion($Db);//Función para desonectarse de la base de datos

        return $usuario;
       
    }
}

?>