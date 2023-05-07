<?php
session_start();
if(!$_SESSION["user"] || empty($_SESSION["user"])){
    header("location: index.php",TRUE,301);
    die();
}
setcookie("login",$_SESSION['user']['cc'],time()+86400);
include 'conexionDB.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $_SESSION['user']['cc']."    ".$_SESSION['user']['nombre']; 
    if(isset($_GET['close_session'])){
        session_destroy();
        header("location: index.php");
        die();
    }
    ?>
    <a href="lista_docentes.php?close_session=true">cerrar sesión</a>
</body>
</html>