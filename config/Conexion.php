<?php
namespace config;

class ConexionBD
{
    private $dsn = "mysql:host=localhost;dbname=venta";
    private $user = "root";
    private $pass = "";
    private $conexion;

    // forma 1: conexion mediante constructor + getter
    public function __construct()
    {
        $this->conexion = new \PDO($this->dsn, $this->user, $this->pass);
    }
}