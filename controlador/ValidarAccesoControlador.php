<?php
 require_once('modelo/usuario.php');
 require_once('modelo/ValidarAcceso.php');

 class ValidarAccesoControlador{

    public function __construct(){}

     public function validarAcceso(){
         $usuario = new Usuario();
         $usuario->setUsuarioEmail('admin@admin.com');
         $usuario->setUsuarioPassword('admin');

        $validarAcceso = new ValidarAcceso();
        $validarAcceso->validarAcceso($usuario);

        echo $usuario->getUsuarioId()." ".$usuario->getRolId();
        //No me imprime el contenido
     }
 }
?>