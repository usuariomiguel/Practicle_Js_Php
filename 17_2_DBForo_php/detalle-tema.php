<?php
include('acceso_datos.php');

$datos = $conexion_bd->query('SELECT id, titulo, nombre, contenido, id_tema FROM Respuesta;');
// NOTA: No es lo más optimo no hacer el where aquí. Pedimos más datos de los que neceitamos. Y luego tenemos que trabajar con ellos. 
// Pero, funciona. Que es lo importante.
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
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($datos as $fila) { 
                        if ($fila['id_tema'] ==  $_GET['id']){ ?>
                    <tr>
                        <td><?=$fila['titulo']?></td>
                        <td><?=$fila['nombre']?></td>
                        <td><?=$fila['contenido']?></td>
                    </tr>
                    <?php }} ?>
                    </tbody>
                </table>
                <h3><a href="index.php">Volver al menú</a></h3>
            </div>
</body>
</html>