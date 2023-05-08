<?php
ob_start();
session_start();
if(!$_SESSION["user"] || empty($_SESSION["user"])){
    header("location: index.php",TRUE,301);
    die();
}
setcookie("login",$_SESSION['user']['cc'],time()+86400);
include 'query-functions.php';
$lista_modulos= get_modulos();
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
        logout();
    ?>
    <a href="lista_docentes.php?close_session=true">cerrar sesión</a>
    <?php
    while($row = mysqli_fetch_array($lista_modulos)){
        echo "<a href=\"evaluacion_docente.php?id=" . $row['id'] . "\">" . $row['Docente']. "</a> <br>";
    }
    ?>
    
</body>
</html>