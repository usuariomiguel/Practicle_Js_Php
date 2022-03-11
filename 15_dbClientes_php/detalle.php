<?php 
include('acceso_datos.php');

// ERORO SQLi
// No hacer
// $datos = $conexion_bd->query('SELECT * FROM Ciclistas WHERE id='. $_GET['id']);

//SELECT with WHERE shorter
$select = $conexion_bd->prepare("SELECT * FROM datos WHERE id = :id;");
$row = $select->fetch($select->execute(array(':id' => $_GET['id'])));

$n = 0;
//print_r($row);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="cuerpo">
    <div id="content">

    <table>
        <h1>Datos de: <?= $row['nombre'] ?></h1>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Edad</th>
                    <th>Gusto_musical</th>
                </tr>
            </thead>
            <tbody> 
                <tr>
                    <td> <?= $row ['nombre'] ?></td>
                    <td> <?= $row['apellido'] ?></td>
                    <td> <?= $row['edad'] ?></td>
                    <td> <?= $row['gustos_musicales'] ?></td>
                </tr> 
            </tbody>
    </table>
    <a href="index.php">Menu Principal</a>
    </div>
</body>
</html>