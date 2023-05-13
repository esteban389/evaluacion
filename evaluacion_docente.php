<?php
ob_start();
session_start();
if(!$_SESSION["user"] || empty($_SESSION["user"])){
    header("location: index.php",TRUE,301);
    die();
}
include 'query-functions.php';
include 'Components/ui.php';
$docente = mysqli_fetch_array(get_docente($_GET['docente_id']));
$lista_preguntas= get_preguntas();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="icon" href="static/favicon.ico">
    <title>Evaluar el docente</title>
</head>
<body>
    <div class="info_usuario">
        <a class="btn back-btn" href="lista_docentes.php"><</a>
        <?php 
            echo user_info();
            logout();
            if(isset($_POST["guardar_evaluacion"])) insert_evaluacion($_GET['docente_id']);            
        ?>
        <a class="btn logout-btn" href="lista_docentes.php?close_session=true">salir</a>
    </div>
    <form class="lista" method="POST">
        <container>
            <?php
                while($row = mysqli_fetch_array($lista_preguntas)){
                    echo mostrar_preguntas($row);
                }
            ?>
            <label for="">Observaciones</label>
            <textarea name="observaciones" id="observaciones" cols="30" rows="10"></textarea>
            <input type="submit" class="btn login-btn" name="guardar_evaluacion" value="Enviar">
        </container>   
    </form>
</body>
</html>