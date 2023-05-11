<?php
function login_view($Login_error="false"){
    echo '<!DOCTYPE html>
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
            <img src="static/Escudo_de_la_Universidad_Libre_de_Colombia.svg.png" alt="Escudo de la Universidad Libre de Colombia">';
    
            if(isset($Login_error) && $Login_error=="true") echo "<p class=\"error-message\">Usuario o contraseña invalida</p>";
             echo text_input_1(label: "Usuario",placeholder:"", id: "usuario",required: true);
             echo text_input_1(label: "Clave",placeholder:"",id: "clave", required: true, type:"password");
             if(isset($_POST["log-in"]))login();
    echo    '<input type="submit" class="btn login-btn" name="log-in" value="Iniciar sesión">
        </form>
        </div>
    </body>
    </html>';
}

?>