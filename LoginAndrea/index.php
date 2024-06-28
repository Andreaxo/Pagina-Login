<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
    <form method="post" action=" ">
    <?php
        include("index2.php");
        include("controlador.php");
    ?>

    <div class="menu">
    <h2> ¡Bienvenido al inicio de sesión! </h2>
        <div class="identidad">
         
    <input id="textos" placeholder="Ingrese el numero de identidad" type="text" name="ID">
</div>
        <div class="usuarios">
    <br> 
    <input id="textos" placeholder="Ingrese el usuario "type="text" name="usuario">
</div>
    <div class="contraseña">
    <br> 
    <input id="textos" placeholder="Ingrese la contraseña"type="password" name="clave">

    <br>
    <br>
</div>
    <input id="btnvalidar" type="submit" value="Iniciar sesión" name="validar">
    <br> <br>
    <a href="./registro.php">¿No estás registrado? ¡Click aquí!</a>
    </form>
</div>
</body>
</html>