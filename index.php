<?php 
    ob_start();
    include 'Components/Input.php';
    include 'query-functions.php';
    if(isset($_COOKIE['login'])){
        if(!isset($_SESSION['user'])){
            auto_login($_COOKIE['login']);
        }
        header("location: lista_docentes.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="icon" href="static/favicon.ico">
    <title>Inicia sesión</title>
    <style>
        body{
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div>
    <form method="POST" class="login-form">
        <?php echo text_input_1(label: "Usuario",placeholder:"", id: "usuario",required: true)?>
        <?php echo text_input_1(label: "Clave",placeholder:"",id: "clave", required: true, type:"password")?>
        <?php if(isset($_POST["log-in"])) login();?>
        <input type="submit" class="btn" name="log-in" value="Iniciar sesión">
    </form>
    </div>
</body>
</html>