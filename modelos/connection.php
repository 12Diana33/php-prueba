<?php

    class conexion{

        //atributos de la clase conexion
        private $host;
        private $usuario;
        private $pass;
        private $db;
        private $con;

        public function __construct(){
            $this->host = "localhost";
            $this->usuario = "root";
            $this->pass = "";
            $this->db = "ejemplophp";

            //conexion a la base de datos
            $this->con = mysqli_connect($this->host, $this->usuario, $this->pass, $this->db);
            
            //comprobando la conexion a la base de datos
            if(mysqli_errno($this->con)){

                //echo se ve desde el navegador, no se ve en la consola de php
                echo "Error al conectar a la base de datos: $this->db";
                
            }else{
                echo "Conexion exitosa a la base de datos: $this->db";
            }

        }

        public function consultaSimple($sql)
        {
            //ejecutar la consulta sql
            mysqli_query($this->con, $sql);
        }

        public function consultaRetorno($sql)
        {
            //ejecutar la consulta sql

            return mysqli_query($this->con, $sql);
        }

    }//finalizacion de la clase conexion

    //creacion de objeto
    //$miConexion = new conexion();

?>