<?php 

include ("./acceso_datos.php");

$abilities = $conexion_bd->query('SELECT * FROM abilities');

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
        <h1>Habilidades de Pokemons</h1>
        <table>
            <thead>
                <tr>
                    <th>habilidad</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($abilities as $fila) { ?>
                    <tr>
                        <td><?=$fila['abil_name']?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>