<?php 
include('acceso_datos.php');

// ERORO SQLi
// No hacer
// $datos = $conexion_bd->query('SELECT * FROM Ciclistas WHERE id='. $_GET['id']);

//SELECT with WHERE shorter
$select = $conexion_bd->prepare("SELECT * FROM Ciclistas WHERE id = :id;");
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
        <h1>Listado de ciclistas</h1>
            <h2><?=$row['nombre']?></h2>
            <?php for($i=0;$i<$row['num_trofeos'];$i++) { ?>
                <img src="trofeo.png"/>
            <?php } ?> 
    </div>
</body>
</html>