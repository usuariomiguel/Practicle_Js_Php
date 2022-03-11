<?php
include('acceso_datos.php');

$datos = $conexion_bd->query('SELECT * FROM datos');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="cuerpo">
    <div id="content">
        <h1>Listado de Clientes</h1>
        <table>
                <thead>
                    <tr>
                        <th>Id.</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Edad</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($datos as $fila) { ?>
                <tr>
                    <td><?=$fila['id']?></td>
                    <td>
                        <a href="detalle.php?id=<?=$fila['id']?>">
                            <?=$fila['nombre']?>
                        </a>
                    </td>
                    <td><?=$fila['apellido']?></td>
                <?php } ?>
                    <td>    
                <?php if($fila['edad'] > 18) { ?>
                    <img src="./menor.jpg">
                <?php } if($fila['edad'] < 18) { ?>
                    <img src="./mayor.jpg">
                <?php } ?>
                    </td>
                </tr>
                </tbody>
            </table>  
            

    </div>

</body>
</html>