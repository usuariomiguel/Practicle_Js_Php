<?php
print_r($_POST);

$nombre= "";
$desc= "";
$error_nombre= false;
$error_desc= false;


if (
    isset($_POST['enviar'])
) {

    if (

        isset($_POST['nombre']) &&
        $_POST['nombre'] != ""

    ) {

        //campo relleno
        $nombre = $_POST['nombre']; 

    } else {

        //campo vacio
        $error_nombre == true;

    }

    if (

        isset($_POST['desc']) &&
        $_POST['desc'] != ""

    ) {

        //campo relleno
        $nombre = $_POST['desc']; 

    } else {

        //campo vacio
        $error_desc == true;
    }

    if (

        isset($_POST['desc']) &&
        $_POST['desc'] != ""

    ) {

        //campo relleno
        $nombre == $_POST['desc']; 

    } else {

        //campo vacio

    }


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
    <form method="post" action="/01_2_Formulario_php/index.php">
        <label>Nombre: </label>
        <input id="<?php ($error_nombre)?'error':''?>" type="text" name="nombre" value="<?=$nombre?>" ></input>
        <label>Descripcion: </label>
        <input <?php ($error_desc)?'error':''?> type="text" name="desc" value="<?=$desc?>"></input><hr>
        <label>Urgente?</label><br><br>
        <label>Si: </label>
        <input type="radio" name="s_urgencia" value="s"></input>
        <label>No: </label>
        <input type="radio" name="n_urgencia" value="n"></input><hr>
        <input type="submit" name="enviar" value="enviar"></input>
    </form>
    <h1>

</body>
</html>