<?php 

include ("./acceso_datos.php");

$pokemon = $conexion_bd->query('SELECT * FROM pokemon');

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
<body>
    <div id="tabla_listado">
        <h1>Movimientos de Pokemons</h1>
        <table>
            <thead>
                <tr>
                    <th>Pokemon</th>
                    <th>altura</th>
                    <th>peso</th>
                    <th>experiencia base</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($pokemon as $fila) { ?>
                    <tr>
                        <td><?=$fila['pok_name']?></td>
                        <td><?=$fila['pok_height']?></td>
                        <td><?=$fila['pok_weight']?></td>
                        <td><?=$fila['pok_base_experience']?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>