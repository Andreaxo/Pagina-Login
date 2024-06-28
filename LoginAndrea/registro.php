<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
<form method="post" action="BD.php">
    

    <div class="menu">
    <h2> ¡Registrate ahora! </h2>
        <div class="identidad">
       
    <input id="textos" placeholder="Ingresa el número de identidad " type="text" name="ID">
</div>
        <div class="usuarios">
    <br>
    <input id="textos" placeholder="Ingresa el usuario " type="text" name="usuario">
</div>
    <div class="contraseña">
    <br> 
    <input id="textos" placeholder="Ingresa la contraseña " type="password" name="clave">

    <br>

    <input  id="btnvalidar" type="submit" value="Registrarse" id="iniciosesion" name="validar" href="./index.php"> 
    <br> <br>
    <a href="./index.php">¡Ahora inicia sesión aquí!</a>

    <br>
</div>
</div>
</form>

</body>
</html>