<h1 align="center">Ingrese la nueva UBicación </h1>
<hr>
<?php 
require_once "public/layout/header.php";
?>
<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="provincia" placeholder="Ingrese provincia"><br>
    <input type="text" name="distrito" placeholder="Ingrese distrito"><br>
    <input type="text" name="calle" placeholder="Ingrese calle"><br>
    <input type="text" name="nro" placeholder="Ingrese numero "><br>
    <input type="text" name="pedido_id" placeholder="Ingrese id pedido"><br>
    <input type="submit" name="submit" value="Guardar">
</form>

<?php   
use aplicacion\controladores\UbicacionControlador;
require_once "aplicacion\controladores\UbicacionControlador.php";

    if(!empty($_POST)){
           $provincia =$_POST["provincia"];
            $distrito = $_POST["distrito"];
            $calle = $_POST["calle"];
            $nro = $_POST["nro"];
            $pedido_id = $_POST["pedido_id"];
                

    $ubicacionControlador = new UbicacionControlador();
    echo $ubicacionControlador->guardar(  $provincia,  $distrito, $calle, $nro, $pedido_id );

}
