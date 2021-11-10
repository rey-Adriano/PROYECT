<?php
namespace aplicacion\controladores;

use aplicacion\modelo\Pedido;

require_once "config\autocarga.php";

class ControladorPedido{

    public static function mostrarTodo(): \PDOStatement{
        $pedido= new Pedido();
        $resultado = $pedido->mostrar();
        return $resultado;
    }

    
}
