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

    
}