    
<?php
use aplicacion\controladores\UbicacionControlador;
require_once "aplicacion\controladores\UbicacionControlador.php";
require_once "public/layout/header.php";

$ubicacionC = new UbicacionControlador();

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $ubicacion = $ubicacionC->mostrarPorId($id);
    ?>

    <form method="post" action="<?= $_SERVER["PHP_SELF"] ?>">
            <input type="text" name="provincia" value="<?= $ubicacion[1] ?>" placeholder="introdusca la provincia"><br>
            <input type="text" name="distrito" value="<?= $ubicacion[2] ?>" placeholder="introdusca es distrito"><br>
            <input type="text" name="calle" value="<?= $ubicacion[3] ?>" placeholder="introdusca la calle"><br>
            <input type="text" name="nro" value="<?= $ubicacion[4] ?>" placeholder="introdusca el número de la calle"><br>
            <input type="number" name="pedido_id" value="<?= $ubicacion[5] ?>" placeholder="introdusca el ID del pedido"><br>
            <input type="hidden" name="id" value="<?= $curso[0] ?>" placeholder="introdusca el ID"><br>
            <input type="submit" name="submit" value="Guardar">
    </form>

    <?php
}

if (!empty($_POST)) {
    $id = $_POST["id"];
    $provincia = $_POST["provincia"];
    $distrito = $_POST["distrito"];
    $calle = $_POST["calle"];
    $nro = $_POST["nro"];
    $pedido = $_POST["id"];

    echo $ubicacionC->actualizar($id,$provincia,$distrito,$calle,$nro,$pedido);
}