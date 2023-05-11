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
    if(isset($_GET['Login_error'])) $Login_error = $_GET['Login_error'];

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
          if(isset($_GET['Login_error'])) login_view($Login_error);
          else{
              header('HTTP/1.0 404 Not Found');
              echo '404 Not Found';
          }
          break;
      }
?>
