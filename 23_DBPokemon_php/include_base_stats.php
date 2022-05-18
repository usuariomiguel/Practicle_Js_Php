<?php 

include ("./acceso_datos.php");

$base_stats = $conexion_bd->query('SELECT * FROM base_stats');

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
        <h1>Stats de Pokemons</h1>
        <table>
            <thead>
                <tr>
                    <th>b_hp</td>
                    <th>b_atk</th>
                    <th>b_def</th>
                    <th>b_sp_atk</th>
                    <th>b_sp_def</th>
                    <th>b_speed'd</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($base_stats as $fila) { ?>
                    <tr>
                        <td><?=$fila['b_hp']?></td>
                        <td><?=$fila['b_atk']?></td>
                        <td><?=$fila['b_def']?></td>
                        <td><?=$fila['b_sp_atk']?></td>
                        <td><?=$fila['b_sp_def']?></td>
                        <td><?=$fila['b_speed']?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>