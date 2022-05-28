<?php

include("./acceso_session.php");
$ngranos = 0;
if (!isset($_COOKIE['leyenda_ajedrez'])) {
        #INSERTAR INFORMACION A TABLA
        $insertar = $conexion_bdsession->prepare('INSERT INTO session (nsessiones) VALUES (1);');
        $insertar ->execute();
    } else {
        #MODIFICAR DATOS
        $modificar = $conexion_bdsession->prepare('UPDATE session SET nsessiones = nsessiones * 2;');
        $modificar->execute();
    }

$select = $conexion_bdsession->query('SELECT nsessiones FROM session;');
$ses = $select->fetch(PDO::FETCH_OBJ);
$ngranos = $ses->nsessiones;

setcookie('leyenda_ajedrez',$ngranos);

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
    <div id="div_titulo">
        <h1>Listado de Pokemons</h1>
            <button onclick="document.location='./include_pokemon.php'">Pokemon</button>
            <button onclick="document.location='./include_abilities.php'">Abilities</button>
            <button onclick="document.location='./include_moves.php'">Moves</button>
            <button onclick="document.location='./include_base_stats.php'">Base stats</button>
    </div>

        <p>
            <?php 
                echo "$ngranos grano de arroz";
            ?>
        </p>


    <hr><br><br>
    <img src=".\src\portada_pokemon.png" width="500" height="250" onclick="document.location='./include_pokemon.php'"></img>

</body>
</html>