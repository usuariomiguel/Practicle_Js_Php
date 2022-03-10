<?php
session_start();
print_r($_SESSION);
if ($_SESSION['EXAMENIAW2022'] == "suspenso") {
    header("Location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Privada3</title>
</head>
<body id="cuerpo">
    <h1>Privada 3</h1>
        <a href="priv1.php">Privada1</a><br> 
        <a href="priv2.php">Privada2</a><br> 
        <a href="priv3.php">Privada3</a><br>
        <a href="logout.php">Cerrar Session</a>    
</body>
</html>