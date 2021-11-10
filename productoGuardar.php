
<?php

require_once "public/layout/header.php";
?>

<div class="container">
    <div class="pt-5 text-white">
        <header class="py-5 mt-5">
            <h1 class="display-4">Ingrese nuevo Producto</h1>
            <p class="lead mb-0">Using Bootstrap 4 and Javascript, create a transparent navbar which changes its style on scroll.</p>
            <p class="lead mb-0">Snippet by
                <a href="https://bootstrapious.com" class="text-white">
                    <u>Bootstrapious</u></a>
            </p>
        </header>
        
<table border="1">
    <tr>
    <form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <th><h5>ingrese el tipo: <input type="text" name="tipo_pro" placeholder="Ingrese tipo de producto"></H5 ></th>
    <th><h5>ingrese la marca:<input type="text" name="marca_pro" placeholder="Ingrese marca"></h5></th>
    <th><h5>ingrese el precio:<input type="text" name="precio_pro" placeholder="Ingrese precio"></h5></th>
    <th><h5>ingrese los detalles: <input type="text" name="detalle_pro" placeholder="Ingrese detalle"></h5></th>
    
    <th><input type="submit" name="submit" value="Guardar"></th>
</form>
</tr>
</table>
<?php
 use aplicacion\controladores\ProductoControlador;
  require_once "aplicacion\controladores\ProductoControlador.php";
if(!empty($_POST)){
    $tipo_pro= $_POST["tipo_pro"];
    $marca_pro = $_POST["marca_pro"];
    $precio_pro = $_POST["precio_pro"];
    $detalle_pro = $_POST["detalle_pro"];

   
   
    $productoc = new ProductoControlador();
    echo $productoc->guardar($tipo_pro, $marca_pro,$precio_pro,$detalle_pro);
}
?>

<form> <input type = "button" value = "¡Regresar!" onclick = "history.back ()"> </form>