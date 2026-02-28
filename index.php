<?php
    include ("ControladorUsuarios.php");
    include_once ("Enrutador.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hola mamor</h1>
    <h2>CRUD CON PHP Y POO EN MVC</h2>
    <nav>
        <ul>
            <li><a href="index.php">Usuarios</a></li>
            <li><a href="">Registrar</a></li>
        </ul>
    </nav>
    <?php
        $enrutador = new Enrutador();
        
    ?>
</body>
</html>



