<?php
ob_start();
session_start();
if(!$_SESSION["email"] || empty($_SESSION["email"])){
    header("location: index.html",TRUE,301);
    die();
}
$docente = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $docente; ?>
</body>
</html>