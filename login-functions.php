<?php
    include 'conexionDB.php';
    function login($_POST){
        $auth_usuario = mysqli_real_escape_string($db,(strip_tags($_POST["usuario"],ENT_QUOTES)));
        $auth_clave = mysqli_real_escape_string($db,(strip_tags($_POST["clave"],ENT_QUOTES)));
        $LOG_IN_QUERY_RESULT = mysqli_query($db,
        "SELECT cc,nombre 
        FROM Estudiantes 
        WHERE cc == '$auth_usuario' AND password =='$auth_clave'");
        if(mysqli_num_rows($LOG_IN_QUERY_RESULT)){
            session_start();
            $_SESSION['user'] = mysqli_fetch_array($LOG_IN_QUERY_RESULT);
            header("location: lista_docentes.php");
        }
    }
?>