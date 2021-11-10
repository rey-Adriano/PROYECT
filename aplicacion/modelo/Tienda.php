<?php


namespace aplicacion\modelo; 

use config\Conexion; 

require_once "config/Conexion.php"; 


class Tienda{
    
    private $idtienda;
    private $nombre;
    private $direccion; 
    private $telefono; 
  

    public function getIdtienda(){
        return $this->idtienda; 

    }

    public function setIdtienda($idtienda):void
    {
        $this->idtienda = $idtienda; 
    }

     public function getNombre()
    {
       return $this->nombre;  

    }

    public function setNombre( $nombre): void
    {
        $this->nombre = $nombre; 
    }

    public function getDireccion()
    {
        return $this->direccion;

    }

    public function setDireccion( $direccion):void
    {
        $this->direccion = $direccion; 
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono( $telefono)
    {
        $this->telefono = $telefono; 
    }

    
    public function mostrar()
    {
        try{
            $conn= new Conexion();
            $sql= "SELECT * FROM tienda "; 
            $resultados = $conn->conectar->query($sql); 
            $conn->desconectar(); 
            return $resultados; 

        }catch(\PDOException $e){
            return $e->getMessage(); 
            
        }
    }




}
