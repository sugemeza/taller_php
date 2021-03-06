<?php
require_once('controlador/Conexion.php');

class CrudSolicitud {

    //Definir constructor vacio
    public function __construct(){}

    public function listarSolicitudes(){
        $Db = Db:: Conectar();//Cadena de conexión
        $sql = $Db->query('SELECT * FROM solicitudes');//Definir la consulta
        $sql->execute();//Ejecución de la cosulta
        Db::CerrarConexion($Db);//Función para desonectarse de la base de datos
        return $sql->fetchAll();

    }

   public function guardar($solicitud_id){

        $mensaje = "";
        $solicitud_id = -1;//Solicitud insertada


        $Db = Db:: Conectar();//Cadena de conexión
        //Definir sentencia sql
        //El prepare hace que el cambio de un valor no tenga efecto
       //No me tomo la variable de las comillas vacias

        $sql = $Db->prepare("INSERT INTO 
        solicitudes(solicitud_id,usuario_id,fechaServicio) 
        VALUES('',:usuario_id, now())");

       $sql->bindValue('usuario_id',$_SESSION['usuario_id']);


        //Filtro de la ejecucion de las consultas
        try{//Ejecutar la sentencia sql definida contenida en la variable $sql
            $sql->execute();
            $mensaje = "Registro Exitoso";
            $solicitud_id = $Db->lastInsertId();
        }
        catch(Exception $e){//Captura error
            $mensaje = $e;
        }

        Db::CerrarConexion($Db);//Cerrar la conexion con la Db
        return $solicitud_id;//Retorna id para uso en la tabla detalle
    }

    public function eliminar($solicitud_id) {

        $mensaje = "";
        $Db = Db:: Conectar();//Cadena de conexión

        $sql = $Db->prepare("DELETE FROM solicitudes
        where solicitud_id=$solicitud_id");

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

    public function guardarDetalle($detalle){
        $mensaje = ""; 

        $Db = Db:: Conectar();//Cadena de conexión
    
        $sql = $Db->prepare("INSERT INTO 
        detallesolicitudes(detalleSolicitud_id,solicitud_id,servicio_id,precioUnitario,cantidad) 
        VALUES('',:solicitud_id,:servicio_id,:precioUnitario,:cantidad )");

        $sql->bindValue('solicitud_id',$detalle->getSolicitudId());
        $sql->bindValue('servicio_id',$detalle->getServicioId());
        $sql->bindValue('precioUnitario',$detalle->getPrecioUnitario());
        $sql->bindValue('cantidad',$detalle->getCantidad());
     


        //Filtro de la ejecucion de las consultas
        try{//Ejecutar la sentencia sql definida contenida en la variable $sql
            $sql->execute();
            $mensaje = "Registro Exitoso";
        }
        catch(Exception $e){//Captura error
            $mensaje = $e;
        }

        Db::CerrarConexion($Db);//Cerrar la conexion con la Db
        return $mensaje;
    }

    public function listarDetalleSolicitud($solicitud_id){
        $Db = Db:: Conectar();//Cadena de conexión
        $sql = $Db->query("SELECT * FROM detallesolicitudes
        WHERE solicitud_id=$solicitud_id");//Definir la consulta
        $sql->execute();//Ejecución de la cosulta
        Db::CerrarConexion($Db);//Función para desonectarse de la base de datos
        return $sql->fetchAll();

    }

    public function eliminarDetalleSolicitud($detalleSolicitud_id){
        $mensaje=" ";

        $Db = Db:: Conectar();//Cadena de conexión
        $sql = $Db->query("DELETE FROM detallesolicitudes
        WHERE detalleSolicitud_id=$detalleSolicitud_id");//Definir la consulta

        try{//Ejecutar la sentencia sql definida contenida en la variable $sql
            $sql->execute();
            $mensaje = "Eliminado";
        }
        catch(Exception $e){//Captura error
            $mensaje = $e;
        }

        Db::CerrarConexion($Db);//Función para desonectarse de la base de datos
        return $mensaje;
    }


}
