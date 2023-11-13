<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  margin-left: 8px;
  text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

p{
    text-align: center;
    color: white;
}

li a:hover:active {
  background-color: #04AA6D;
}
</style>
</head>
<header>
    <?php
    session_start();
if(!isset($_SESSION['usuario'])){
  header("Location: login.php?redirigido=true");
    }else if($_SESSION['usuario']['usuario_admin'] == 1){
    echo "
    <ul>
    <li><p>Usuario:  ".$_SESSION['usuario']['nombre_usuario']."</p></li>
    <li><a href=principal.php>Home</a></li>
    <li><a href=perdil.php>Perfil</a> </li>
    <li><a href=zonaadmin.php>Zona de administrador</a></li>
    <li><a href=logout.php>Cerrar sesión</a></li>
    </ul>";
        }else if($_SESSION['usuario']['usuario_admin'] == 0){
            echo "
            <ul>
            <li><p>Usuario:  ".$_SESSION['usuario']['nombre_usuario']."</p></li>
            <li><a href=principal.php>Home</a></li>
            <li><a href=perdil.php>Perfil</a> </li>
            <li><a href=logout.php>Cerrar sesión</a></li>
            </ul>";
        }
    ?>
 
</header>
<body>

</body>
</html>


