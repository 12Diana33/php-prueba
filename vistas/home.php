<?php
    $controlador = new ControladorUsuarios();
    $resultado = $controlador->listar();
?>

<table border ="1">
    <thead>
        <tr>
            <th>idusuarios</th>
            <th>nombres</th>
            <th>apellidos</th>
            <th>cedula</th>
            <th>usuario</th>
            <th>password</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        var_dump($resultado);
            while($fila = mysqli_fetch_array($resultado)){
                echo "<tr>";
                echo "<td>".$fila["idusuarios"]."</td>";
                echo "<td>".$fila["nombres"]."</td>";
                echo "<td>".$fila["apellidos"]."</td>";
                echo "<td>".$fila["cedula"]."</td>";
                echo "<td>".$fila["usuario"]."</td>";
                echo "<td>".$fila["password"]."</td>";
                echo "<td>
                <a href='?cargar=consultar&id=".$fila["idusuarios"]."'>Consultar</a>
                <a href='?cargar=editar&id=".$fila["idusuarios"]."'>Editar</a>
                <a href='?cargar=eliminar&id=".$fila["idusuarios"]."'>Eliminar</a>";

                echo "</tr>";
            }
        ?>
                <!-- <a href='?cargar=consultar'>Consultar</a> |
                <a href='?cargar=editar'>Editar</a> |
                <a href='?cargar=eliminar'>Eliminar</a>
            </td> -->



</tbody>