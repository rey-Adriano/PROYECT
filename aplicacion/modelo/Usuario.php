<?php

namespace aplicacion\modelo;
use config\Conexion;

include_once "config\autocarga.php";

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

    public function mostrarUsuariosPorId()
    {
        try {
            $conexion = new Conexion();
            $conn = $conexion->abrirConexion();
            $sql = "SELECT * FROM usuarios WHERE id=$this->id";

            $resultado = $conn->query($sql);
            $conexion->cerrarConexion();
            return $resultado;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function mostrar()
    {
        try {
            $conexion = new Conexion();
            $conn = $conexion->getConexion();
            $sql = "SELECT id, usuario, nombre, apellidos, email, DNI,telefono, sexo,cargo, estado
                    FROM usuarioss ";
            $resultados = $conn->conectar->query($sql);
            $conn->desconectar();
            return $resultados;
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
    }

    public function Guardar()
    {
        try {
            $conexion = new Conexion();
            $conn = $conexion->getConexion();
            $sql = "INSERT INTO usuarioss (user_name,user_pass, nombres, apellidos, telefono,DNI, sexo, cargo,estado)  VALUES ('$this->user_name', '$this->user_pass', '$this->nombres','$this->apellidos', '$this->telefono', '$this->dni','$this->sexo', '$this->cargo', '$this->estado')";
            $resultados = $conn->conectar->exec($sql);
            $conn->desconectar();
            return $resultados;
        } catch (\PDOException $e) {
            return $e->getMessage();
        }

    }

    public function Loguear()
    {

    }

    public function crearUsuario(String $user_name, String $user_pass, String $nombres, String $apellidos, int $telefono, int $dni, String $sexo, String $cargo, int $estado): string
    {
        $usuario = new \App\Clases\Usuario();
        $usuario ->setUserName($user_name);
        $usuario ->setUserPass($user_pass);
        $usuario ->setNombres($nombres);
        $usuario ->setApellidos($apellidos);
        $usuario ->setTelefono($telefono);
        $usuario ->setDni($dni);
        $usuario ->setSexo($sexo);
        $usuario ->setCargo($cargo);
        $usuario ->setEstado($estado);
        $resultado = $usuario->crearUsuario();


        $mensaje = "";

        if($resultado!=1){
            return $mensaje = "no se guardó";
        }

        if (!$this->validarCadena($user_name)) {
            $mensaje .= "Caracteres no admitidos en Usuarios<br>";
        }

        if (!$this->validarCadena($nombres)) {
            $mensaje .= "Caracteres no admitidos en Nombres<br>";
        }

        if (!$this->validarCadena($apellidos)) {
            $mensaje .= "Caracteres no admitidos en Apellidos<br>";
        }

        if (strlen($telefono) != 9) {
            $mensaje .= "Ingrese un rango correcto de telefono<br>";
        }

        if (strlen($dni) != 8) {
            $mensaje .= "Ingrese un rango correcto de DNI<br>";
        }

        if (strlen($mensaje) == 0) {
            if($cargo == "Administrador"){
                $id_admin = "1";
                $usuario = new Usuario();
                $user_pass = password_hash($user_pass, PASSWORD_BCRYPT);
                $resultado = $usuario->insertar($id_admin, $user_name, $user_pass, $nombres, $apellidos, $telefono, $dni, $sexo, $cargo, $estado);
                if ($resultado != 0) {
                    $mensaje = "Guardado";
                }
            }
            elseif($cargo == "Repartidor"){
                $id_re = "1";
                $usuario = new Usuario();
                $user_pass = password_hash($user_pass, PASSWORD_BCRYPT);
                $resultado = $usuario->insertar($id_re, $user_name, $user_pass, $nombres, $apellidos, $telefono, $dni, $sexo, $cargo, $estado);
                if ($resultado != 0) {
                    $mensaje = "Guardado";
                }
            }
        }

        return $mensaje;
    }
}