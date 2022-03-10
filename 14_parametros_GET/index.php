<?php

// Página con 3 imágenes. Cada imagen será un enlace a la página index.php?add=pera/manzana/melocoton.

// Si no hay nada en el GET se mostrará un mensaje de bienvenido al selector de frutas. Si se ha pulsado alguna se mostrará Gracias por elegir $fruta.

// Si el parámetro no es alguno de estos se mostrará "Fruta no reconocida"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selector frutas - Parámetros GET</title>
    <style>
        img{ width: 50px;}
        #selector, h3, h1, p {text-align: center;}
    </style>
</head>
<body>
<h1>
    <?php if (!isset($_GET['add'])) { ?>
        Selector frutas
        <?php } elseif (($_GET['add'] != "apple" ) && ($_GET['add'] != "peach" ) && ($_GET['add'] != "pear" )) { ?>
            <h1>Fruta no encontrada</h1>
            <p><a href="./index.php">Volver al menú</a>
    <?php } else { ?>
        Gracias por elegir <?=$_GET['add']?> </h1>
        <h3> Pincha en la fruta para volver al selector. 
        <a href="./index.php"><img src="content/<?=$_GET['add']?>.png" alt="Volver al menú"></a> 
    <?php } ?>
    <br>
    <?php if (!isset($_GET['add'])) { ?>
<div id="selector">
    <a href="?add=apple"><img src="content/apple.png" alt="Seleccionar Manzana"></a>
    <a href="?add=peach"><img src="content/peach.png" alt="Seleccionar Melocotón"></a>
    <a href="?add=pear"><img src="content/pear.png" alt="Seleccionar Pera"></a>
    <?php } ?>
    <br><br>
</div>
</body>
</html>