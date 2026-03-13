<h1>Agregar un nuevo usuario</h1>

<form action="" method= "post">
    <label for="">Cedula</label><br>
    <input type="text" name="cedula" required><br><br>

   <label for="">Nombres</label><br>
   <input type="text" name="nombres" required><br><br>

   <label for="">Apellidos</label><br>
   <input type="text" name="apellidos" required><br><br>

   <label for="">Usuario</label><br>
   <input type="text" name="usuario" required><br><br>

   <label for="">Password</label><br>
   <input type="text" name="password" required><br><br>

   <input type="submit" name="enviar" value="Registrar">

</form>

<?php
    $controlador=new ControladorUsuarios();
    if (isset($_POST["enviar"])){

    $resultado=$controlador->crear($_POST["cedula"],$_POST["nombres"],$_POST["apellidos"],$_POST["usuario"],$_POST["password"]);
        if ($resultado){
            echo "Registro satisfactorio";
        }
        else{
            echo "La cedula ya esta registrada";
        }
    }