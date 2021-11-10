<?php
namespace App\Clases;
use Includes\ConexionBD as Conexion;
include_once "includes/autoload.php";

class Usuario{
    private $id;
    private $user_name;
    private $user_pass;
    private $nombres;
    private $apellidos;
    private $telefono;
    private $dni;
    private $sexo;
    private $cargo;
    private $estado;


    public function __construct($id, $user_name, $user_pass, $nombres, $apellidos, $telefono, $dni, $sexo, $cargo, $estado)
    {
        $this->id = $id;
        $this->user_name = $user_name;
        $this->user_pass = $user_pass;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->telefono = $telefono;
        $this->dni = $dni;
        $this->sexo = $sexo;
        $this->cargo = $cargo;
        $this->estado = $estado;
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id): void
    {
        $this->id = $id;
    }


    public function getUserName()
    {
        return $this->user_name;
    }


    public function setUserName($user_name): void
    {
        $this->user_name = $user_name;
    }


    public function getUserPass()
    {
        return $this->user_pass;
    }


    public function setUserPass($user_pass): void
    {
        $this->user_pass = $user_pass;
    }


    public function getNombres()
    {
        return $this->nombres;
    }


    public function setNombres($nombres): void
    {
        $this->nombres = $nombres;
    }


    public function getApellidos()
    {
        return $this->apellidos;
    }


    public function setApellidos($apellidos): void
    {
        $this->apellidos = $apellidos;
    }


    public function getTelefono()
    {
        return $this->telefono;
    }


    public function setTelefono($telefono): void
    {
        $this->telefono = $telefono;
    }


    public function getDni()
    {
        return $this->dni;
    }


    public function setDni($dni): void
    {
        $this->dni = $dni;
    }


    public function getSexo()
    {
        return $this->sexo;
    }


    public function setSexo($sexo): void
    {
        $this->sexo = $sexo;
    }

    public function getCargo()
    {
        return $this->cargo;
    }


    public function setCargo($cargo): void
    {
        $this->cargo = $cargo;
    }


    public function getEstado()
    {
        return $this->estado;
    }


    public function setEstado($estado): void
    {
        $this->estado = $estado;
    }



    public function Registrar()
    {

    }

    public function Loguear()
    {

    }
}
