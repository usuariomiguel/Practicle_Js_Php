<?php
include("./acceso_datos.php");
$paises = $conexion_bd->query('SELECT id, name, phonecode FROM countries');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Pokemon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="menu_principal">
<div id="tabla_listado">

        <h1>Listado de paises</h1>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Codigo de telefono</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($paises as $fila) { ?>
                    <tr>
                        <td>
                            <a href="detalle.php?id=<?=$fila['id']?>">
                                <?=$fila['name']?>
                            </a>
                        </td>
                        <td><?=$fila['phonecode']?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>