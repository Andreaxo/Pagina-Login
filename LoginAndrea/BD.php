<?php
$conexion = mysqli_connect("localhost", "root", "", "ingreso") or die("Problemas con la conexión");
$id = mysqli_real_escape_string($conexion, $_REQUEST['ID']);
$usuario = mysqli_real_escape_string($conexion, $_REQUEST['usuario']);
$clave = mysqli_real_escape_string($conexion, $_REQUEST['clave']); // Escapar la clave para entender caracteres especiales.

mysqli_query($conexion, "INSERT INTO ingreso(ID,usuario,clave) VALUES('$id', '$usuario', '$clave')") or die("Problemas en el select " . mysqli_error($conexion));
mysqli_close($conexion);
header("Location: index.php");
?>
