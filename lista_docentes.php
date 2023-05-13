<?php
ob_start();
session_start();
if(!$_SESSION["user"] || empty($_SESSION["user"])){
    header("location: index.php",TRUE,301);
    die();
}
setcookie("login",$_SESSION['user']['cc'],time()+86400);
include 'query-functions.php';
include 'Components/ui.php';
$lista_modulos= get_modulos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="static/favicon.ico">
    <link href="style.css" rel="stylesheet">
    <title>Seleccionar docente</title>
</head>
<body>
    <header class="info_usuario" style="justify-content:center;">
        <?php
            echo user_info();
            logout();
            ?>
        <a class="btn logout-btn" href="lista_docentes.php?close_session=true" style="position: fixed; left:1rem;">salir</a>
</header>
    <h1 class="warning">
        Advertencia: !tienes docentes pendientes por evaluar!
    </h1>
    <container>
        <table class="lista">
            <tr>
                <th><h2>Nombre</h2></th>
                <th><h2>Modulo</h2></th>
            </tr>
            <?php
            while($row = mysqli_fetch_array($lista_modulos)){
                echo mostrar_lista_docentes($row);
            }
            ?>
        </table>
    </container>
    
</body>
</html>