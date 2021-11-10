<?php

namespace aplicacion\controladores;

use aplicacion\modelo\Usuario;
use app\modelo\Alumno;

require_once "config\autocarga.php";
class UsuarioControlador
{
    public function guardar($username, $password)
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $usuario = new Usuario($username, $password);
        if ($usuario->crear() != 0) {
            header("location: index.php?s");
        } else {
            header("location: index.php?s");
        }

    }

    public static function mostrarTodo(): \PDOStatement{
        $usuario = new Usuario();
        $resultados = $usuario->mostrar();
        return $resultados;
        }

    public function login($dni, $password)
    {
        $persona = new Persona();
        $resultado = $persona->existe($dni);

        foreach ($resultado as $person) {
            $idPersona = $person["idpersona"];
            $username = $person["nombres"];
        }

        if (isset($idPersona)) {
            $usuario = new Usuario($idPersona, $password);
            $resultado = $usuario->getPassword();

            foreach ($resultado as $user) {
                $passwordbd = $user["password"];
                $tipo = $user["tipo"];
                $id = $user["idusuarios"];
            }
            if (isset($passwordbd)) {
                // TODO: revisar validacion
                if (password_verify($password, $passwordbd)==false) {
                    session_start();
                    $_SESSION["usuario"] = $username;
                    $_SESSION["tipo"] = $tipo;
                    $_SESSION["id"] = $id;
                    header("location: bienvenido.php");
                } else {
                    echo "usuario y/o contraseña incorrecto";
                }
            } else {
                echo "usuario y/o contraseña incorrecto";
            }
        } else {
            echo "usuario y/o contraseña incorrecto";
        }

    }
}