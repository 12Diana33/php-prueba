<?php
include_once("connection.php");
class Usuarios
{
    //inicializacion de atributos
    private $id;
    private $cedula;
    private $nombres;
    private $apellidos; 
    private $usuario;
    private $password;

    private $con;

    //metodo constructor
    public function __construct()
    {
        $this->con =new conexion();
    }

    public function listar(){
        $query = "SELECT * FROM usuarios";
        $resultado = $this->con->consultaRetorno($query);
        return $resultado;
    }

    public function set($atributo, $valor)
    {
        $this->$atributo=$valor;
    }

    public function crear(){
        $sql2="SELECT * FROM usuarios WHERE cedula= '$this->cedula'";
        $resultado=$this->con->consultaRetorno($sql2);
        $filas=mysqli_num_rows($resultado);

        if($filas==0){
            $sql="INSERT INTO usuarios(nombres, apellidos, cedula, usuario, password) VALUES
            ('$this->nombres','$this->apellidos','$this->cedula','$this->usuario','$this->password')";
            echo $sql;
            $this->con->consultaSimple($sql);
            return true;
        }
        else{
            return false;
        }
    }

    public function consultar(){
        $sql="SELECT * FROM usuarios WHERE idusuarios = '$this->id";
        $resultado=$this->con->consultaRetorno($sql);
        $registro=mysqli_fecth_assoc($resultado);

        $this->id=$registro["idusuarios"];
        $this->nombres=$registro["nombres"];
        $this->apellidos=$registro["apellidos"];
        $this->cedula=$registro["cedula"];
        $this->usuario=$registro["usuario"];
        $this->password=$registro["password"];

        return $registro;
    }

}

?>


