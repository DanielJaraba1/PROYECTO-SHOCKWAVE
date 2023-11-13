<?php 
require_once 'sesiones.php';
require 'cabecera.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Zona Principal</h1>
    <?php 
    echo  $_SESSION['usuario']['nombre_usuario'];
    ?>
   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
    <?php require 'search.php';?>
<input type="text" name="busqueda" id="busqueda">
    <input type="submit" value="BUSCAR"><br>
    <?php
    if(isset($_POST['busqueda'])){
        if(!empty($_POST['busqueda'])){
            foreach ($resultBusqueda as $usuario) {
                echo "<a href= perfil.php?usu = ".$usuario['nombre_usuario'].">". $usuario['nombre_usuario'] . "</a><br>"; 
             }
        }
    }
    ?>
   </form>
</body>
</html>