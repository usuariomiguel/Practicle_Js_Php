<?php
include('acceso_datos.php');

$search = $_GET['search'];
$porcentajes = "%".$search."%";
/*
if ($_GET['ordenar'] == 'yeah') {
    $select = $conexion_bd->prepare("SELECT * FROM datos WHERE ((nombre LIKE :caracter) OR (apellido LIKE :caracter)) ORDER BY edad DESC;");
    //echo("ordenando");
} else {
    $select = $conexion_bd->prepare("SELECT * FROM datos WHERE ((nombre LIKE :caracter) OR (apellido LIKE :caracter));");
    //echo("NO ordenando");
}

$select->execute(array(':caracter' => $porcentajes));
*/

if (isset($_GET['search'])){
    $mensaje = "Bienvenido a Google";
}
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
            <input type="text" name="search" id="search" value="<?=$search?>">
            <input type="submit" value="enviar" name="enviar"><br> <?=$mensaje?>
        </form>
        <br><br>
</body>
</html>