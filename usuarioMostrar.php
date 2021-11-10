<?php
use aplicacion\controladores\UsuarioControlador;
require_once "aplicacion\controladores\UsuarioControlador.php";

$resultados =UsuarioControlador::mostrarTodo();
if($resultados->rowCount()==0) {
    echo "No hay datos que mostrar";
}else{
    ?>
    <table border="1" cellspacing="0">
        <thead>
        <tr>
            <th class='tabla_cuadro'>#</th>
            <th class='tabla_cuadro'>Usuario</th>
            <th class='tabla_cuadro'>Nombre</th>
            <th class='tabla_cuadro'>Apellidos</th>
            <th class='tabla_cuadro'>Email</th>
            <th class='tabla_cuadro'>DNI</th>
            <th class='tabla_cuadro'>telefono</th>
            <th class='tabla_cuadro'>Sexo</th>
            <th class='tabla_cuadro'>Cargo</th>
            <th class='tabla_cuadro'>Estado</th>
            <th class='tabla_cuadro'>&nbsp;</th>
            <th class='tabla_cuadro'>&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($resultados as $usuario) {
            echo "<tr>
                <td class='tabla_celda'>" . $usuario["usuario"] . "</td>
                <td class='tabla_celda'>" . $usuario["nombre"] . "</td>
                <td class='tabla_celda'>" . $usuario["apellidos"] . "</td>
                <td class='tabla_celda'>" . $usuario["email"] . "</td>
                <td class='tabla_celda'>" . $usuario["DNI"] . "</td>
                <td class='tabla_celda'>" . $usuario["telefono"] . "</td>
                <td class='tabla_celda'>" . $usuario["sexo"] . "</td>
                <td class='tabla_celda'>" . $usuario["cargo"] . "</td>
                <td class='tabla_celda'>" . $usuario["estado"] . "</td>
                <td class='tabla_celda'><form method='post' action='Eliminar_Usuario.php'>
                        <input type='hidden' name='id' value='".$usuario["id"]."'>
                        <input type='submit' name='submit' value='Eliminar'>
                    </form>
                </td>
                <td class='tabla_celda'><form method='post' action='Actualizar_usuario.php'>
                        <input type='hidden' name='id' value='".$usuario["id"]."'>
                        <input type='submit' name='submit2' value='Actualizar'>
                    </form>
                </td>
              </tr>";
        }
        ?>
        </tbody>
    </table>
    <?php
}