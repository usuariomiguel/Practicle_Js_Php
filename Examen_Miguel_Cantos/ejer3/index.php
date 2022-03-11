<?php
print_r($_POST);

$nombre= "";
$desc= "";
$s_urgencia= "";
$n_urgencia= "";
$validar = "";
$error = "";
if (isset($_POST['nombre'])) {
    $nombre = ($_POST['nombre']);
    $validar = "id='correcto'";

}
if (isset($_POST['desc'])) {
    $desc = ($_POST['desc']);
    $validar = "id='correcto'";

}
if (!isset($_POST['nombre'])) {
    $nombre = ($_POST['nombre']);
    $validar = "id='incorrecto'";
    $error = "falta campo";
}
if (!isset($_POST['desc'])) {
    $desc = ($_POST['desc']);
    $validar = "id='incorrecto'";
    $error = "falta campo";
}

if (isset($_POST['s_urgencia'])) {
    $s_urgencia = ($_POST['s_urgencia']);
    $validar = "id='correcto'";
    $error = "falta campo";
}
if (isset($_POST['n_urgencia'])) {
    $n_urgencia = ($_POST['n_urgencia']);
    $validar = "id='correcto'";
    $error = "falta campo";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ejer3</title>
</head>
<body id="cuerpo">
    <hr>
    <h1>Validar datos</h1>
    <form method="post" action="index.php">
        <label>Nombre: </label>
        <input type="text" name="nombre" value="<?=$nombre?>" <?=$validar?>></input><?=$error?>
        <label>Descripcion: </label>
        <input type="text" name="desc" value="<?=$desc?>" <?=$validar?>></input><?=$error?><hr>
        <label>Urgente?</label><br><br>
        <label>Si: </label>
        <input type="radio" name="s_urgencia" value="<?=$s_urgencia?>" <?=$validar?>></input><?=$error?>
        <label>No: </label>
        <input type="radio" name="n_urgencia" value="<?=$n_urgencia?>" <?=$validar?>></input><?=$error?><hr>
        <button name="enviar">Enviar</button>
    </form>
    <h1>

</body>
</html>