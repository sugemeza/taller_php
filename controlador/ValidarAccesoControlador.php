<?php
 require_once('modelo/Usuario.php');
 require_once('modelo/ValidarAcceso.php');

 class ValidarAccesoControlador {

    public function __construct(){}

     public function validarAcceso(){
         $usuario = new Usuario();

         $usuario->setUsuarioEmail('admin@admin.com');
         $usuario->setUsuarioPassword('admin');

        //Llamado de la clase entidad ValidarAcceso desde la file modelo
        $validar_Acceso = new ValidarAcceso();
        $validar_Acceso->validarAccesoUsuario($usuario);

        echo $usuario->getUsuarioId()." ".$usuario->getRolId();
        echo "Existe".$usuario->getUsuarioExiste();

        //Condición para comprobar que el usuario existe
         //Desde que el conteo de registro es mayor a uno se setea la variable
         //existe como un true y por eso entrara al condicional

         if($usuario->getUsuarioExiste()){
             echo "El usuario exite";
         }
         else{
             //header('Location: index.php');
             /*echo "<script> alert('No existe');
                   document.location.href='Index.php';
                   </script>";*/
         }
     }
 }
?>