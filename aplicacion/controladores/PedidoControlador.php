<?php


use aplicacion \ modelo \ Pedido ;

require_once  "config \ autocarga.php" ;

class PedidoControlador {

     function static  public mostrarTodo (): \ PDOStatement { 
        $pedido = nuevo  Pedido ();
        $resultados = $pedido -> mostrar ();
        return  $ resultado ;
    }


    
}
?>
