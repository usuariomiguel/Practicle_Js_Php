<?php
include('acceso_datos.php');

// Copied from https://github.com/Angelocho/iaw-2021-2022/blob/master/ejerciciosIAW/ejerphp/basededatos2.php

$search = $_GET['search'];
$porcentajes = "%".$search."%";
//((nombre LIKE :caracter) OR (apellido LIKE :caracter))

if ($_GET['ordenar'] == 'yeah') {
    $select = $conexion_bd->prepare("SELECT * FROM datos WHERE ((nombre LIKE :caracter) OR (apellido LIKE :caracter)) ORDER BY edad DESC;");
    //echo("ordenando");
} else {
    $select = $conexion_bd->prepare("SELECT * FROM datos WHERE ((nombre LIKE :caracter) OR (apellido LIKE :caracter));");
    //echo("NO ordenando");
}

$select->execute(array(':caracter' => $porcentajes));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div id="content">
        <h1>Búsqueda de: <em><?=$_GET['search']?></em></h1>
        <form action="index.php" method="get">
            <input type="text" name="search" id="search">
            <input type="submit" value="enviar" name="enviar">
        </form>
        <br><br>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Gustos musicales</th>
            </tr>
            <?php if (isset($_GET["enviar"])) { ?>
                <?php 
                    while ($row = $select->fetch(PDO::FETCH_ASSOC)) { ?> 
                        <tr>
                            <td><?=$row['nombre']?></td>
                            <td><?=$row['apellido']?></td>
                            <td><?=$row['edad']?></td>
                            <td><?=$row['gustos_musicales']?></td>
                        </tr>
                    <?php } ?>
            <?php } ?>
        </table>
        <br><br><br>
            <p><a href="index.php?search=&enviar=enviar">Restablecer</a></p>
            <p><a href="index.php?search=<?=$_GET['search']?>&ordenar=yeah&enviar=enviar">Ordenar</a></p>      
    </div>
</body>
</html>