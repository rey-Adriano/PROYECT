
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currier-Login</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/new.js"></script>
</head>
<body>
    <header>
<div align = "center">
        <FONT FACE="impact" SIZE=10 COLOR="#273746"> EMPRESA COURIER X</FONT>
        <HR style="color: black;"><h2>Inicio de Sesión </h2> </HR>
        <hr>
    </div>
</header>
    <div class="login-page">
        <div class="form">
            <p style="font-size:large; font-weight: bolder;">BIENVENIDO</p>
            <hr>
        <form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
        <p>Ingrese su usuario:</p><input type="text" name="usuario" placeholder="usuario"/>
        <p>Ingrese su contraseña:</p><input type="password" name="contraseña" placeholder="contraseña"/>
        <input  type="submit" value="Login">
        <P>¿No tienes cuenta? </P>
        <p>Crea una <a href="registro.php"> AQUÍ </a></p>
        </form>
    </div>
</div>


</body>

</html>

 
