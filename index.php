<?php
    include_once ("controladores/ControladorUsuarios.php");
    include_once ("controladores/Enrutador.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
</head>
<body>

    <h1>CRUD CON PHP Y POO EN MVC</h1>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="?cargar=crear">Registrar</a></li>
            <li><a href="?cargar=editar">Editar</a></li>
            <li><a href="?cargar=consultar">Consultar</a></li>
            <li><a href="?cargar=eliminar">Eliminar</a></li>

        </ul>
    </nav>
    <?php
        $enrutador = new Enrutador();
        if($enrutador->validarvista($_GET['cargar'])){
            $enrutador->cargarvista($_GET['cargar']);
        }
        
    ?>
</body>
</html>



