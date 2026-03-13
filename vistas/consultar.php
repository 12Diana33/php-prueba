<h1>consultar resgistro</h1>

<?php
$consultas = new ControladorUsuarios();

if (isset($_GET["id"]))
    $resgistro=$controlador->consultar($_GET["id"]);


?>