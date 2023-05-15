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
    <header class="info_usuario">
        <a class="btn back-btn" href="lista_docentes.php"><img src="static/back_icon.png"></a>
        <?php 
            echo user_info();
            logout();
            if(isset($_POST["guardar_evaluacion"])) insert_evaluacion($_GET['docente_id']);            
        ?>
        <a class="btn logout-btn" href="lista_docentes.php?close_session=true" >salir</a>
    </header>
    <container>
        <form class="lista" method="POST" style="padding: 20px;">
            <?php
                while($row = mysqli_fetch_array($lista_preguntas)){
                    echo mostrar_preguntas($row);
                }
            ?>
            <label for="">Observaciones</label>
            <textarea name="observaciones" id="observaciones" cols="30" rows="10"></textarea>
            <input type="submit" class="btn login-btn" name="guardar_evaluacion" value="Enviar">
        </form>
    </container>

    <container style="margin-top: 30px; margin-inline:15%">
        <div class="resultados_docente">
            <div>
                <h2>
                    Pregunta
                </h2>
                <h2>
                    Promedio
                </h2>
            </div>
            <div>
                <h3>
                    Pregunta 1
                </h3>
                <h3>
                    <?php echo show_avg("1", $_GET['id_docente']) ?>   
                </h3>
            </div>
            <div>
                <h3>
                    Pregunta 2
                </h3>
                <h3>
                    <?php echo show_avg("2", $_GET['id_docente']) ?>   
                </h3>
            </div>
            <div>
                <h3>
                    Pregunta 3
                </h3>
                <h3>
                    <?php echo show_avg("3", $_GET['id_docente']) ?>   
                </h3>
            </div>
            <div>
                <h3>
                    Pregunta 4
                </h3>
                <h3>
                    <?php echo show_avg("4", $_GET['id_docente']) ?>   
                </h3>
            </div>
            <div>
                <h3>
                    Pregunta 5
                </h3>
                <h3>
                    <?php echo show_avg("5", $_GET['id_docente']) ?>   
                </h3>
            </div>
        </div>
    </container>
</body>
</html>