<?php


namespace aplicacion\modelo; 

use config\Conexion; 

require_once "config/Conexion.php"; 


class Pedido{
    private $origen;
    private $destino;
    private $precio; 
    private $estado; 
    private $descripcion; 
    private $ubicacion_id;
    private $recepcionista_id;
    private $trabajador_id;  

    public function getOrigen(){
        return $this->origen; 

    }

    public function setOrigen($origen):void
    {
        $this->iorigen = $origen; 
    }


     public function getDestino( )
    {
       return $this->destino; 

    }

    public function setDestino( $destino): void
    {
        $this->destino = $destino; 
    }



    public function getPrecio()
    {
        return $this->precio;

    }

    public function setPrecio( $precio):void
    {
        $this->precio = $precio; 
    }



    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado( $estado)
    {
        $this->estado = $estado; 
    }
    

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion( $descripcion)
    {
        $this->descripcion = $descripcion; 
    }



    public function getUbicacion_id()
    {
        return $this->ubicacion_id;
    }

    public function setUbicacion_id( $ubicacion_id)
    {
        $this->ubicacion_id = $ubicacion_id; 
    }



    public function getRecepcionista_id()
    {
        return $this->recepcionista_id;
    }

    public function setRecepcionista_id( $recepcionista_id)
    {
        $this->recepcionista_id = $recepcionista_id; 
    }




    public function getTrabajador_id()
    {
        return $this->trabajador_id;
    }

    public function setTrabajador_id( $trabajador_id)
    {
        $this->trabajador_id = $trabajador_id; 
    }



    

    
}
