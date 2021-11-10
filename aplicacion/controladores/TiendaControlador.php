<?php
namespace aplicacion\controladores;

use aplicacion\modelo\Tienda;


require_once "config\autocarga.php";

class TiendaControlador{

    public static function mostrarTodo(): \PDOStatement{
        $tienda = new Tienda();
        $resultados = $tienda->mostrar();
        return $resultados;
    }
}
