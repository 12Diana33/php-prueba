<?php

class Enrutador
{
    public function cargarVista($vista){

        switch ($vista) {
            case 'crear':
                include("vistas/Enrutador/crear.php");
                break;
            default:
                include("vistas/Enrutador/error404.php");
        }
    }

    public function validarVista($variable){

    }
}