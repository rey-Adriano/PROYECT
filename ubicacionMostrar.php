<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>

<p>
    
</p>
</header>
<p>



<?php
use aplicacion\controladores\UbicacionControlador;
require_once "aplicacion\controladores\UbicacionControlador.php";
require_once "public/layout/header.php";

$resultados = UbicacionControlador::mostrarTodo();

if ($resultados->rowCount() == 0) {
    echo "No hay datos que mostrar";
} else {
    ?>
    <table border="1" cellspacing="0" align="center" class="table table-dark table-striped">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">provincia</th>
            <th scope="col">distrito</th>
            <th scope="col">calle</th>
            <th scope="col">número</th>
            <th scope="col">id pedido</th>
            <th scope="col">Actualizar</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($resultados as $ubicacion) {
            echo "<tr>
                <td scope='row'>" . $ubicacion["id"] . "</td>
                <td>" . $ubicacion["provincia"] . "</td>
                <td>" . $ubicacion["distrito"] . "</td>
                <td>" . $ubicacion["calle"] . "</td>
                 <td>" . $ubicacion["nro"] . "</td>
                 <td>" . $ubicacion["pedido_id"] . "</td>
                 <td><a href='ubicacionActualizar.php?id=" . $ubicacion["id"] . "'>actualizar</a></td>
                
         
              </tr>";
        }
        ?>
        
        </tbody>
    </table>
    <hr>
    <a href="ubicacionGuardar.php">Registrar Nueva UBICACIÓN</a>
    <?php

    require_once "public/layout/footer.php";
}?>

<body>
    
</body>
</html>
