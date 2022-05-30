<?php 

include ("./acceso_datos.php");

$pais = $conexion_bd->prepare('SELECT name,currency_name,region,subregion FROM countries where id = :id;');
$pais->execute(array(':id' => $_GET['id']));
$id = $pais->fetchAll(PDO::FETCH_ASSOC);
/*print_r ($pais);echo "<br>";
print_r ($_GET['id']);
print_r ($id);*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Paises</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="tabla_listado">
        <h1>Listado de paises</h1>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Moneda</th>
                    <th>Region</th>
                    <th>SubRegion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($id as $fila) { ?>
                    <tr>
                        <td><?=$fila['name']?></td>
                        <td><?=$fila['currency_name']?></td>
                        <td><?=$fila['region']?></td>
                        <td><?=$fila['subregion']?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>