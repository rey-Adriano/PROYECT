<?php


namespace aplicacion\modelo; 

use config\Conexion; 

require_once "config/Conexion.php"; 

class Producto{

    private $id_pro;
    private $tipo_pro;
    private $marca_pro; 
    private $precio_pro; 
    private $detalle_pro; 
    private $tienda_idtienda; 

    public function getId_pro(){
        return $this->id_pro; 

    }

    public function setId_pro($id_pro):void
    {
        $this->id_pro = $id_pro; 
    }

   public function getTipo_pro(){
        return $this->tipo_pro; 

    }

    public function setTipo_pro($tipo_pro):void
    {
        $this->tipo_pro = $tipo_pro; 
    }

    public function getMarcar_pro(){
        return $this->marca_pro; 

    }

    public function setMarca_pro($marca_pro):void
    {
        $this->marca_pro = $marca_pro; 
    }

    public function getPrecio_pro(){
        return $this->precio_pro; 

    }

    public function setPrecio_pro($precio_pro):void
    {
        $this->precio_pro = $precio_pro; 
    }

    public function getDetalle_pro(){
        return $this->detalle_pro; 

    }

    public function setDetalle_pro($detalle_pro):void
    {
        $this->detalle_pro = $detalle_pro; 
    }

    public function mostrar()
    {
        try{
            $conn= new Conexion();
            $sql= "SELECT * FROM producto"; 
            $resultados = $conn->conectar->query($sql); 
            $conn->desconectar(); 
            return $resultados; 

        }catch(\PDOException $e){
            return $e->getMessage(); 
            
        }
    }

    public function guardar(){
        try{
            $conn = new Conexion();
            $sql = "INSERT INTO producto(tipo_pro, marca_pro, precio_pro, detalle_pro) 
            VALUES('$this->tipo_pro','$this->marca_pro','$this->precio_pro','$this->detalle_pro')";
            $resultados = $conn->conectar->exec($sql);
            $conn->desconectar();
            return $resultados;
        }catch (\PDOException $e){
            return $e->getMessage();
        }
    }





}