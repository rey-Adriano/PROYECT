<?php


namespace aplicacion\modelo; 

use config\Conexion; 

require_once "config/Conexion.php"; 


class Ubicacion{
    private $id;
    private $calle;
    private $provincia; 
    private $distrito; 
    private $nro; 
    private $pedido_id; 

    public function getId(){
        return $this->id; 

    }

    public function setId($id):void
    {
        $this->id = $id; 
    }

     public function getCalle( )
    {
       return $this->calle; 

    }

    public function setCalle( $calle): void
    {
        $this->calle = $calle; 
    }

    public function getProvincia()
    {
        return $this->provincia;

    }

    public function setProvincia( $provincia):void
    {
        $this->provincia = $provincia; 
    }

    public function getDistrito()
    {
        return $this->distrito;
    }

    public function setDistrito( $distrito)
    {
        $this->distrito = $distrito; 
    }

    public function getNro()
    {
        return $this->nro;
    }

    public function setNro( $nro)
    {
        $this->nro = $nro; 
    }

    public function getPedido_id()
    {
        return $this->pedido_id;
    }

    public function setPedido_id( $pedido_id)
    {
        $this->pedido_id = $pedido_id; 
    }

    public function mostrar()
    {
        try{
            $conn= new Conexion();
            $sql= "SELECT * FROM ubicacion"; 
            $resultados = $conn->conectar->query($sql); 
            $conn->desconectar(); 
            return $resultados; 

        }catch(\PDOException $e){
            return $e->getMessage(); 
            
        }
    }


    public function guardar()
    {
        try{
            $conn = new Conexion();
            $sql = "INSERT INTO ubicacion(provincia, distrito, calle, nro,pedido_id) 
            VALUES ('$this->provincia','$this->distrito','$this->calle','$this->nro','$this->pedido_id')";
            $resultados = $conn->conectar->exec($sql); 
            $conn->desconectar(); 
            return $resultados; 
        }
        catch(\PDOException $e){
            return $e->getMessage(); 

        }
    }

    public function mostrarPorId(){
        try {
            $conn = new Conexion();
            $sql = "SELECT * FROM ubicacion WHERE id=$this->id";
            $resultados = $conn->conectar->query($sql);
            $conn->desconectar();
            return $resultados;
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }
    

    public function actualizar(){
        try {
            $conn = new Conexion();
            $sql = "UPDATE ubicacion SET provincia='$this->provincia', distrito='$this->distrito',  calle='$this->calle', nro='$this->nro',  pedido_id='$this->pedido_id'
             WHERE id=$this->id";
            $resultados = $conn->conectar->exec($sql);
            $conn->desconectar();
            return $resultados;
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }

}
