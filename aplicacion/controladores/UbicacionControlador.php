<?php
namespace aplicacion\controladores;

use aplicacion\modelo\Ubicacion;

require_once "config\autocarga.php";

class UbicacionControlador{

    public static function mostrarTodo(): \PDOStatement{
        $ubicacion = new Ubicacion();
        $resultados = $ubicacion->mostrar();
        return $resultados;
    }


    public function guardar( string $provincia, string  $distrito,  string $calle, int $nro, int $pedido_id ){
        $ubicacion = new Ubicacion();
        $ubicacion->setProvincia($provincia);
        $ubicacion->setDistrito($distrito);
        $ubicacion->setCalle($calle);
        $ubicacion->setNro($nro);
        $ubicacion->setPedido_id($pedido_id);

        $resultado = $ubicacion->guardar();
        if($resultado!=1){
            return $mensaje = "no se guardó";
        }else{
            header("location: ubicacionMostrar.php");
        }
    }


    public function mostrarPorId( $id): array{
        $ubicacion = new Ubicacion();
        $ubicacion->setId($id);
        $resultados = $ubicacion->mostrarPorId();

        $data = array();
        foreach ($resultados as $ubicacion) {
            $data[0] = $ubicacion["id"];
            $data[1] = $ubicacion["provincia"];
            $data[2] = $ubicacion["distrito"];
            $data[3] = $ubicacion["calle"];
            $data[4] = $ubicacion["nro"];
            $data[5] = $ubicacion["pedido_id"];

        }
        return $data;
    }

    public function actualizar( $id , $provincia, $distrito, $calle, $nro, $pedido_id){
        $ubicacion = new Ubicacion();
        $ubicacion->setId($id);
        $ubicacion->setProvincia($provincia);
        $ubicacion->setDistrito($distrito);
        $ubicacion->setCalle($calle);
        $ubicacion->setNro($nro);
        $ubicacion->setPedido_id($pedido_id);
        
        $resultado = $ubicacion->actualizar();
        if ($resultado != 1) {
            $mensaje = "No se actualizó";
        } else {
            $mensaje = "registro actualizado";
        }
        return $mensaje;
    }





    
}