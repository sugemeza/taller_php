<?php

require_once('controlador/Conexion.php');

class ValidarAcceso {

    public function __construct(){}

    //Método de verificación
    //Consulta del usuario
    //El método esta recibiendo un parametro de tipo class usuario de la variable $usuario
    public function validarAccesoUsuario(Usuario $usuario){

        $Db = Db::Conectar();//Cadena de conexión
        $sql = $Db->prepare('SELECT * FROM usuarios
        WHERE email=:email AND password=:password
         AND estado = 1');//Definir la consulta
        $sql->bindValue('email', $usuario->getUsuarioEmail());//Asiganar valores a los parametros
        $sql->bindValue('password', $usuario->getUsuarioPassword());

        $usuario->setUsuarioExiste(false);

        try{
            $sql->execute();//Ejecución de la cosulta

            if($sql->rowCount()>0){ //Conteo de registro y debe ser mayor a 1 para que ingrese
                $datosUsuario = $sql->fetch();//Almacena los datos de la consulta de un usuario
                $usuario->setUsuarioId($datosUsuario['usuario_id']);
                $usuario->setRolId($datosUsuario['rol_id']);
                $usuario->setUsuarioPassword('');//Asignacion de nulo a la contraseña
                $usuario->setUsuarioExiste(true);

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