<?php
print_r($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Procesador formulario</h1> 
    <form method="post">
        <label>Aula:</label>
        <input type="text" name="aula">
        <label>Ip:</label>
        <input type="text" name="ip"><br>
        <label>Tipo de equipo:</label><br>
        intel<input type="radio" id="intel" name="equipo">   
        AMD<input type="radio" id="AMD" name="equipo">   
        asus<input type="radio" id="asus" name="equipo"> <br>
        <input type="submit" value="enviar" id="enviar"> 
    </form>
</body>
</html>