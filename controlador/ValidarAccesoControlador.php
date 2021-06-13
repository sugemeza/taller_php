<?php
 require_once('modelo/Usuario.php');
 require_once('modelo/ValidarAcceso.php');

 class ValidarAccesoControlador {

    public function __construct(){}

     public function validarAcceso(){
         $usuario = new Usuario();

         $usuario->setUsuarioEmail($_REQUEST['email']);
         $usuario->setUsuarioPassword(sha1(($_REQUEST['password']))); //Aplicando incriptacion

        //Llamado de la clase entidad ValidarAcceso desde la file modelo
        $validar_Acceso = new ValidarAcceso();
        $validar_Acceso->validarAccesoUsuario($usuario);

        echo $usuario->getUsuarioId()." ".$usuario->getRolId();
        echo "Existe".$usuario->getUsuarioExiste();

        //Condición para comprobar que el usuario existe
         //Desde que el conteo de registro es mayor a uno se setea la variable
         //existe como un true y por eso entrara al condicional
         if($usuario->getUsuarioExiste()){

            //Referencias a las variables de sesion
            /*Como esta funcion ya la estamos llamando en el index esta queda global para todos los metodos
            que la invocar
             * session_start();//Variables de sesion*/
            $_SESSION['acceso'] = true;
            $_SESSION['usuario_id'] = $usuario->getUsuarioId();
            $_SESSION['rol_id'] = $usuario->getRolId();

            header("Location: index.php");
            //require_once ('Index.php');
         }
         else{
             //Ruta de redirección
             header("Location: index.php");

             /*echo "<script> alert('No existe');
                   document.location.href='Index.php';
                   </script>";*/
         }
     }

     public function cerrarSesion(){
        //sessio_start();
        session_destroy();//Desctruye la sesión
        header("Location: index.php");
     }
 }
?>