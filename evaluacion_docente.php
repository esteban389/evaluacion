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
        <?php 
            echo user_info();
            logout();
            if(isset($_POST["guardar_evaluacion"])) insert_evaluacion($_GET['docente_id']);
            show_avg();
            ?>
            <a class="btn logout-btn" href="lista_docentes.php?close_session=true">salir</a>
    </div>
    <form class="lista_preguntas" method="POST">
        <div>       
            <p>
                El docente mantiene el liderazgo durante la clase
            </p>
            <select name="pregunta1" id="1">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>   
        <div>       
            <p>
                El docente muestra respeto por los demás
            </p>
            <select name="pregunta2" id="2">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div> 
        <div>       
            <p>
                El docente facilita diversas dinámicas para la clase
            </p>
            <select name="pregunta3" id="3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div> 
        <div>       
            <p>
                El docente despierta la motivación
            </p>
            <select name="pregunta4" id="4">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div> 
        <div>       
            <p>
                Fueron cumplidos los objetivos de aprendizaje
            </p>
            <select name="pregunta5" id="5">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div> 
        <label for="">Observaciones</label>
        <textarea name="observaciones" id="observaciones" cols="30" rows="10"></textarea>
        <input type="submit" class="btn login-btn" name="guardar_evaluacion" value="Enviar">
    </form>
</body>
</html>