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
use aplicacion\controladores\TiendaControlador;
require_once "aplicacion\controladores\TiendaControlador.php";
require_once "public/layout/header.php";

$resultados = TiendaControlador::mostrarTodo();

if ($resultados->rowCount() == 0) {
    echo "No hay datos que mostrar";
    echo "suba datos a travez de Guardar"; 
} else {
    ?>
    <table border="1" cellspacing="0" align="center" class="table table-dark table-striped">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">direccion</th>
            <th scope="col">telefono</th>
            
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($resultados as $tienda) {
            echo "<tr>
                <td scope='row'>" . $tienda["idtienda"] . "</td>
                <td>" . $tienda["nombre"] . "</td>
                <td>" . $tienda["direccion"] . "</td>
                <td>" . $tienda["telefono"] . "</td>
                 
                 
                
         
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
