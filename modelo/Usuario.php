<?php

class Usuario {
    //Atributos 
    private $usuario_id;
    private $rol_id;
    private $email;
    private $password;
    private $estado;

    //Atriburo para definir si el usuario esta en el sistema, no forma parte de la Db
    //Será un bool y los inicializamos con false
    private $existe;

    //Constructor de objetos
    public function __construct(){}

    //Métodos set 
    public function setUsuarioId($usuario_id){
        $this->usuario_id = $usuario_id;
    }
    public function setRolId($rol_id){
        $this->rol_id = $rol_id;
    }
    public function setUsuarioEmail($email){
        $this->email = $email;
    }
    public function setUsuarioPassword($password){
        $this->password = $password;
    }
    public function setUsuarioEstado($estado){
        $this->estado = $estado;
    }
    public function setUsuarioExiste($existe) {
        $this->existe = $existe;
    }

    //Métodos get 
    public function getUsuarioId(){
        return $this->usuario_id;
    }
    public function getRolId(){
        return $this->rol_id;
    }
    public function getUsuarioEmail(){
        return $this->email;
    }
    public function getUsuarioPassword(){
        return $this->password;
    }
    public function getUsuarioEstado(){
        return $this->estado;
    }
    public function getUsuarioExiste(){
        return $this->existe;
    }

}
?>