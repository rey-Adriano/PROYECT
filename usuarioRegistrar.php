<?php

use aplicacion\controladores\UsuarioControlador;

require_once "config/autocarga.php";

?>
    <form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
        <input type="text" name="user_name" placeholder="Ingrese usuario"
               value=<?=isset($_POST["user_name"])?$_POST["user_name"]:""?>><br>

        <input type="password" name="contraseña" placeholder="Ingrese contraseña"
               value=<?=isset($_POST["user_pass"])?$_POST["user_pass"]:""?>><br>

        <input type="password" name="repcontraseña" placeholder="Repita contraseña"
               value=<?=isset($_POST["repcontraseña"])?$_POST["repcontraseña"]:""?>><br>

        <input type="text" name="nombres" placeholder="Ingrese nombres"
               value=<?=isset($_POST["nombres"])?$_POST["nombres"]:""?>><br>

        <input type="text" name="apellidos" placeholder="Ingrese apellidos"
               value=<?=isset($_POST["apellidos"])?$_POST["apellidos"]:""?>><br>

        <input type="text" name="telefono" placeholder="Ingrese telefono"
               value=<?=isset($_POST["telefono"])?$_POST["telefono"]:""?>><br>

        <input type="text" name="dni" placeholder="Ingrese dni"
               value=<?=isset($_POST["dni"])?$_POST["dni"]:""?>><br>

        <select name="sexo">
            <option value="masculimo">Masculino</option>
            <option value="femenino">Femenino</option>
        </select><br>

        <select name="sexo">
            <option value="administrador">Administrador</option>
            <option value="repartidor">Repartidor</option>
        </select><br><br><br>
        <input type="submit" value="Guardar">
    </form>
<?php
if(!empty($_POST)) {
    $patron_numerico = "/^(\d)*$/";
    $patron_letras = "/^[a-zA-Z ]*$/";


    if(isset($_POST["submit"])){
        if(!empty($_POST["nombre_user"]) && !empty($_POST["pass_user"]) && !empty($_POST["nombres"]) &&
            !empty($_POST["apellidos"]) && !empty($_POST["telefono"]) && !empty($_POST["DNI"]) &&
            !empty($_POST["sexo"]) && !empty($_POST["cargo"])){
            $user_name = $_POST["nombre_user"];
            $user_pass = $_POST["pass_user"];
            $nombres = $_POST["nombres"];
            $apellidos = $_POST["apellidos"];
            $telefono = (int)$_POST["telefono"];
            $dni = (int)$_POST["DNI"];
            $sexo = $_POST["sexo"];
            $cargo = $_POST["cargo"];
            $estado = 1;

            $usuarioControlador = new UsuarioControlador();
            echo $usuarioControlador->crearUsuario($user_name, $user_pass, $nombres, $apellidos, $telefono, $dni, $sexo, $cargo, $estado);
        }
        else{
            echo "Rellene todos los campos.";
        }
    }

}