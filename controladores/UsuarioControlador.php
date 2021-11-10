<?php

namespace App\Controladores;

use App\Clases\Usuario;

include_once "includes/autoload.php";

class ControladorUsuario
{
    public function login(int $user_name, string $user_pass): void
    {
        $usuario = new Usuario();
        $query = $usuario->mostrarPorCodigo($user_name);
        if ($query->rowCount() != 1) {
            echo "Usuario y/o Contraseña incorrecto";
        } else {
            $datos = $query->fetchAll();
            foreach ($datos as $user) {
                $passwordBD = $user["user_pass"];
                $id_admin = $user["id_admin"];
            }
            if (password_verify($user_pass, $passwordBD)) {
                session_start();
                $_SESSION["id_admin"] = $id_admin;

                header("Location: index.php");
            } else {
                echo "Usuario y/o Contraseña incorrecto";
            }
        }
    }

    public function crearUsuario(String $user_name, String $user_pass, String $nombres, String $apellidos, int $telefono, int $dni, String $sexo, String $cargo, int $estado): string
    {
        $usuario = new Usuario();
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

    public function validarCadena($cadena): bool
    {
        preg_match("/[a-zA-Z ]+/", $cadena, $valores);
        $validacion = (strlen($cadena) == strlen($valores[0])) ? true : false;
        return $validacion;
    }
}