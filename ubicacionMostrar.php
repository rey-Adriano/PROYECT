<h1 style="color:midnightblue" align = "center">LUGARES DE ENTREGA</h1>
<?php
use aplicacion\controladores\UbicacionControlador;
require_once "aplicacion\controladores\UbicacionControlador.php";

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
         
              </tr>";
        }
        ?>
        </tbody>
    </table>
    <a href="cursosGuardar.php">Registrar Curso</a>
    <?php
}
