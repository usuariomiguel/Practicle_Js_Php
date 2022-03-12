<?php
include('acceso_datos.php');
$datos = $conexion_bd->query('SELECT id, titulo, nombre, etiqueta, creado FROM Tema;');

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
    <title>Índice de temas :: Ejercicio 4 - Pablo González</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div id="content">
            <h1>Listado de Temas</h1>
            <div id="centrador">
                <table>
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Nombre</th>
                            <th>Etiqueta</th>
                            <th>Fecha creación</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($datos as $fila) { ?>
                    <tr>
                        <td>
                            <a href="detalle-tema.php?id=<?=$fila['id']?>">
                                <?=$fila['titulo']?>
                            </a>
                        </td>
                        <td><?=$fila['nombre']?></td>
                        <td><?=$fila['etiqueta']?></td>
                        <td><?=$fila['creado']?></td>

                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
</body>
</html>