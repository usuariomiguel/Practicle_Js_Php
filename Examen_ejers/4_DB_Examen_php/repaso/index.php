<?php
print_r($_GET);
echo $_GET['buscar'];
include("./acceso_datos.php");

if (!isset($_GET['enviar'])){
    $bienbenida = "Bienvenido a Google2";
} else {
    $select = $conexion_bd->prepare("SELECT * FROM Respuesta WHERE contenido LIKE :conten");
    $select->execute(array(':conten' => "%".$_GET['buscar']."%"));
    $row = $select->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>google2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Google2</h1><hr>
    <form method="get">
        <label>Buscar:</label>
        <input type="text" name="buscar">
        <input type="submit" value="enviar" name="enviar"><br><br>
        <?php if (!isset($_GET['enviar'])){ echo "Bienvenido a Google2";} ?>
    </form>
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

        <?php if (isset($_GET['enviar'])){ foreach($row as $r){?>

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

        <?php } } ?>
    </table>

</body>
</html>