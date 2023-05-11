<?php 
    ob_start();
    include 'Components/Input.php';
    include 'query-functions.php';
    include 'login.php';
    if(isset($_COOKIE['login'])){
        if(!isset($_SESSION['user'])){
            auto_login($_COOKIE['login']);
        }
        header("location: lista_docentes.php");
    }
    if(isset($_GET['error'])) $error = $_GET['error'];

    switch ($_SERVER['REQUEST_URI']) {
        case '/':
          login_view();
          break;
        case '/index.php':
              login_view();
              break;
        case '/about':
          about();
          break;
        case '/contact':
          contact();
          break;
        default:
          header('HTTP/1.0 404 Not Found');
          echo '404 Not Found';
          break;
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
</head>
<body>
    <div>
    <form method="POST" class="login-form">
        <img src="static/Escudo_de_la_Universidad_Libre_de_Colombia.svg.png" alt="Escudo de la Universidad Libre de Colombia">

        <?php if(isset($error) && $error=="true") echo "<p class=\"error-message\">Usuario o contraseña invalida</p>";
         echo text_input_1(label: "Usuario",placeholder:"", id: "usuario",required: true);
         echo text_input_1(label: "Clave",placeholder:"",id: "clave", required: true, type:"password");
         if(isset($_POST["log-in"]))login();?>
        <input type="submit" class="btn login-btn" name="log-in" value="Iniciar sesión">
    </form>
    </div>
</body>
</html>