<?php

include_once("modelos/Usuarios.php");
class ControladorUsuarios
{
    private $usuario;

    public function __construct(){
        $this->usuario = new Usuarios();
    }
    public function listar(){
        $listar=$this->usuario->listar();
        return $listar;
    }

    public function crear ($cedula,$nombre,$apellidos,$usuario,$password){
        $this->usuario->set("cedula", $cedula);
        $this->usuario->set("nombre", $nombre);
        $this->usuario->set("apellidos", $apellidos);
        $this->usuario->set("password", $password);

        $resultado=$this->usuario->crear();
        return $resultado;

        
    }

    public function consultar($id){
        $this->usuario->set("id",$id);
        return $this->usuario->consultar();

    }

}

?>