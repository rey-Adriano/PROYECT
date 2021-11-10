<?php
namespace aplicacion\controladores;

use aplicacion\modelo\Producto;

require_once "config\autocarga.php";

class ProductoControlador{

    public static function mostrarTodo(): \PDOStatement{
        $producto = new Producto();
        $resultados = $producto->mostrar();
        return $resultados;
    }

    public function guardar(string $tipo_pro, string $marca_pro,string $precio_pro,string $detalle_pro): string{
        $producto = new Producto();
        $producto->setTipo_pro($tipo_pro);
        $producto->setMarca_pro($marca_pro);
        $producto->setPrecio_pro($precio_pro);
         $producto->setDetalle_pro($detalle_pro);
        $resultado = $producto->guardar();

        if($resultado==1){
            return "Se guardó correctamente";
            header("location: productoMostrar.php");

        }else{
            return "No se guardó";
        }
    }

}


