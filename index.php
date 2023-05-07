<?php 
    include 'Components/Input.php';
    include 'login-functions.php';
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div style="padding: 20px;">
    <form method="POST">
        <?php echo text_input_1(label: "Usuario",placeholder:"", id: "usuario",required: true)?>
        <?php echo text_input_1(label: "Clave",placeholder:"",id: "clave", required: true)?>
        <?php if(isset($_POST["log-in"])) login() ?>
        <input type="submit" class="btn" name="log-in" value="Iniciar sesión">
    </form>
    </div>
</body>
</html>