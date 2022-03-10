<?php
include('acceso_datos.php');

$select = $conexion_bd->prepare("SELECT * FROM datos WHERE id = :id;");
$row = $select->fetch($select->execute(array(':id' => $_GET['id'])));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div id="content">
        <h1>Detalles de: <?=$row['nombre']?></h1>
        
        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Gustos musicales</th>
            </tr>
            <tr>
                <td><?=$row['nombre']?></td>
                <td><?=$row['apellido']?></td>
                <td><?=$row['edad']?></td>
                <td><?=$row['gustos_musicales']?></td>
            </tr>
        </table>
        <br><br><br>
            <p><a href="index.php"> Volver a la lista</a></p>      
    </div>
</body>
</html>