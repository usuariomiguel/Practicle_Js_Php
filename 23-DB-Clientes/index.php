<?php
/*

Tenemos una base de datos de clientes con nombre, apellido, edad y gustos musicales (campo de texto largo)

Saca un listado con nombre apellido y una marca indicando si es menor de edad o mayor de edad (puede ser una imagen en el listado) Cada registro tendrá un enlace al detalle. En el detalle se verán todos los campos.

Utiliza estilo CSS y HTML para que la página quede centrada y con borde. Los estilos tienen que ser consistentes entre páginas

*/

include('acceso_datos.php');
$datos = $conexion_bd->query('SELECT id, nombre, apellido, edad FROM datos');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de Datos Clientes</title>
    <link rel="stylesheet" href="estilo.css">
    
</head>
<body>
    <div id="content">
            <h1>Listado de clientes</h1>
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
                    <td>
                        <?php if($fila['edad'] > 18) { ?>
                            <img src="content/cocktail.png" alt="Es mayor de 18 años">
                        <?php } else { ?>
                            <img src="content/child.png" alt="Es menor de 18 años">
                        <?php } ?> 
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>            

</body>
</html>