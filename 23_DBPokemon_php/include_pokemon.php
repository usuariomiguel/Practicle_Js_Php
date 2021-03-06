<?php 
include ("./acceso_datos.php");
$pokemon = $conexion_bd->query('SELECT p.pok_id,p.pok_name,b.b_hp,b.b_atk,b.b_def FROM base_stats b, pokemon p where p.pok_id=b.pok_id;');
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
        <h1>Listado de Pokemons</h1>
        <table>
            <thead>
                <tr>
                    <th>Pokemon</th>
                    <th>HP</th>
                    <th>ATK</th>
                    <th>DEF</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($pokemon as $fila) { ?>
                    <tr>
                        <td>
                            <a href="detalle-pokemon.php?id=<?=$fila['pok_id']?>">
                                <?=$fila['pok_name']?>
                            </a>
                        </td>
                        <td><?=$fila['b_hp']?></td>
                        <td><?=$fila['b_atk']?></td>
                        <td><?=$fila['b_def']?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>