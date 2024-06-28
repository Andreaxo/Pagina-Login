
    <?php
        if(!empty($_POST["validar"])){
            if ((empty($_POST["ID"]) and empty($_POST["usuario"]) and empty($_POST["clave"]))){
                echo "<br>";
                echo "Los campos están vacíos";
                
            } else {
                $id = $_POST["ID"];
                $usuario = $_POST["usuario"];
                $clave = $_POST["clave"];
                $sql = $conexion->query("SELECT * from ingreso where ID='$id' and usuario='$usuario' and clave='$clave'");
                if ($datos=$sql->fetch_object()) {
                    header("location:index2.php");
                } else {
                    echo "ACCESO DENEGADO";
                }
            
            }
            
        }
    ?>
