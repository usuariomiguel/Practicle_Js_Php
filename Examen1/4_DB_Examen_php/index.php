<?php

//print_r($_GET);
$texto ="";
$bienvenido = "";
$row="";

if (!isset($_GET['enviar'])) {

    //no enviamos nada
    $bienvenido = '<h1>Bienvenido a Google2</h1>';

} else {
    $texto = $_GET['texto'];
    include('acceso_datos.php');
    //si enviamos

    $select = $conexion_bd->prepare("SELECT * FROM Respuesta WHERE contenido LIKE :parametro_consulta");
    $select->execute(array(':parametro_consulta' => "%" .$texto. "%"));

    $row = $select->fetchAll(PDO::FETCH_ASSOC);

    //print_r($row);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <hr>
    <h1> Google2 </h1>
    <hr>
    <form method="get" action="./index.php">
        <b>Buscar:</b> <input type="text" name="texto" value="<?=$texto?>">
        <input type="submit" name="enviar" value="enviar">
    </form><br><br>
    <?=$bienvenido?>
    <table class="content">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Contenido</th>
                <th>Nombre</th>
                <th>Creado</th>
                <th>Id_tema</th>
            </tr>
        </thead>

        <?php foreach($row as $r){?>

        <tbody>
            <tr>
                <td><?=$r["id"]?></td>
                <td><?=$r["titulo"]?></td>
                <td><?=$r["contenido"]?></td>
                <td><?=$r['nombre']?></td>
                <td><?=$r['creado']?></td>
                <td><?=$r['id_tema']?></td>
            </tr>
        </tbody>

        <?php } ?>
    </table>
</body>
</html>