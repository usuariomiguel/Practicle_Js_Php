<?php
session_start();

$_SESSION['EXAMENIAW2021'] = 'NO-AUTH';
header('Location: login.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body id="cuerpo">
    <h1>Cerrando sesion</h1>
</body>
</html>