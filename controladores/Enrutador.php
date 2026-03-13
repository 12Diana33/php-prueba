<?php

class Enrutador
{
    public function cargarVista($vista){

        switch ($vista) {
            case 'consultar':
                include_once("vistas/consultar.php");
                break;

            case 'crear':
                include_once("vistas/crear.php");
                break;

            case 'editar':
                include_once("vistas/editar.php");
                break;

            case 'eliminar':
                include_once("vistas/eliminar.php");
                break;

            case 'home':
                include_once("vistas/home.php");
                break;

            default:
                include("vistas/Enrutador/error404.php");
        }
    }

    public function validarVista($variable)
    {
        if (empty($variable))
        {
            include_once("vistas/home.php");
        } 
        else
        {
            return TRUE;
        }

    }

}