<h1>Modulo eliminacion de usuario</h1>

<?php
$consultas = new ControladorUsuarios();

//if(isset($_GET[]))


if(isset($_POST["eliminar"])){
    $controlador->eliminar($_GET["id"]);
    header("Location:index.php");
}





?>