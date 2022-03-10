<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Página 1</title>
</head>
<body style="background-color: <?=$_SESSION['color']?>;" id="cuerpo">
    <h1> Página 2</h1>
    <a href="../page1.php">Página 1</a>
    <a href="../page2.php">Página 2</a>
    <a href="../index.php">Configuración</a>
</body>
</html>