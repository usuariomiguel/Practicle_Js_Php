<?php
//SELECT id, titulo, nombre, contenido FROM Respuesta WHERE id_tema = 1;

include('acceso_datos.php');
$select = $conexion_bd->prepare("SELECT id, titulo, nombre, contenido FROM Respuesta WHERE id_tema = :id;");
$datos = $select->fetch($select->execute(array(':id' => $_GET['id'])));

//print_r($select);
print_r($datos);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <!--
        Alumno: Pablo González Troyano
        Curso: 2º ASIR
        Módulo: Implantación de aplicaciones web
        Fecha: 04/03/2022
    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del tema<?=$_GET['id']?> :: Ejercicio 4 - Pablo González</title>
    <link rel="stylesheet" href="estilo.css">

</head>
<body>
<div id="content">
            <h1>Detalles del tema #<?=$_GET['id']?> </h1>
            <div id="centrador">
                <table>
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Nombre</th>
                            <th>Contenido</th>
                            <th>Fecha creación</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($row as $fila) { ?>
                    <tr>
                        <td><?=$fila['titulo']?></td>
                        <td><?=$fila['nombre']?></td>
                        <td><?=$fila['contenido']?></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <h3><a href="index.php">Volver al menú</a></h3>
            </div>
</body>
</html>