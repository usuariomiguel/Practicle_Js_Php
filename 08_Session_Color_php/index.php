<?php
session_start();

$_SESSION['color'] = $_POST['color'];
print_r($_SESSION); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sesion Colores</title>
</head>
<body style="background-color: <?=$_SESSION['color']?>;" id="cuerpo" >
    <h1>Session Colores</h1>
    <form action="index.php" method="post">
        <input type="color" name="color" id="color" required>
        <input type="submit" name="enviar" value="Enviar" >
    </form>
        <a href="../page1.php">Página 1</a><br>
        <a href="../page2.php">Página 2</a><br>
        <a href="../index.php">Configuración</a>
</body>
</html>