
<hr>
<?php
use aplicacion\controladores\ProductoControlador;
require_once "aplicacion\controladores\ProductoControlador.php";
require_once "public/layout/header.php";

$resultados = ProductoControlador::mostrarTodo();

if ($resultados->rowCount() == 0) {
    echo "No hay datos que mostrar";
} else {
    ?>
    <table border="1" cellspacing="0" align="center" class="table table-dark table-striped">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">tipo</th>
            <th scope="col">marca</th>
            <th scope="col">precio</th>
            <th scope="col">detalle</th>
      
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($resultados as $producto) {
            echo "<tr>
                <td scope='row'>" . $producto["id_pro"] . "</td>
                <td>" . $producto["tipo_pro"] . "</td>
                <td>" . $producto["marca_pro"] . "</td>
                <td>" . $producto["precio_pro"] . "</td>
                 <td>" . $producto["detalle_pro"] . "</td>
                
         
              </tr>";
        }
        ?>
        
        </tbody>
    </table>
    <hr>
    <a href="productoGuardar.php">Registrar Nuevo Producto</a>
    <?php

    require_once "public/layout/footer.php";
}
