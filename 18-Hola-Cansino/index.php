<?php

if(isset($_POST["enviar"])){
    $generar = true;
    $numero = $_POST["numero"];
    $nombre = $_POST["nombre"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola cansino</title>
</head>
<body>
    <h1 style="text-align: center;">¡Hola, cansino!</h1>

    <div id="form" >
    <form action="index.php" method="post">
            <label for="nombre">Caracter: &nbsp;&nbsp;&nbsp;</label>
            <input name="nombre" id="nombre" type="text" tabindex="1" />  
            <label for="numero">Número: &nbsp;&nbsp;&nbsp;</label>
            <input name="numero" id="numero" type="numero" tabindex="2" />    
            <input type="submit" name="enviar" value="Enviar" >
        </form>
        <br><hr><br>
    </div>
    <?php if($generar) { 
        for ($vez = 1; $vez <= $numero; $vez++) {
            echo "<span style=' color: #". rand(0,999999). ";'>" . $nombre. " </span>";
        }
    }
    ?>
</body>
</html>