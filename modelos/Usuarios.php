<?php
include_once("connection.php");
class Usuarios
{
    //inicializacion de atributos
    private $id;
    private $cedula;
    private $nombre;
    private $apellidos;
    private $direccion;
    private $celular;
    private $usuario;
    private $clave;
    private $con;

    //metodo constructor
    public function __construct()
    {
        $this->con =new conexion();
    }

    public function listar(){
        $query = "SELECT * FROM usuarios";
        $resultado = $this->con->consultaRetorno($query);
        echo $resultado;
    }
}

$usuarios = new Usuarios();
$usuarios->listar();