<?php

//print_r($_POST);

if (isset($_POST['nombre']) && isset($_POST['sabor']) && isset($_POST['sirope']) ){
    $mensaje = "Su helado estará listo para recoge en 5 min";
}

if (isset($_POST['enviar'])){
    if (isset($_POST['nombre']) && $_POST['nombre'] == ""){
        $error_nombre = "style='background-color: rgb(235, 127, 132);'";
        $error_nombre_MENSAJE = "campo nombre incompleto";
        $nombre = ($_POST['nombre']);
    }else {
        $nombre = ($_POST['nombre']);
        $error_nombre = "style='background-color: rgb(149, 235, 199);'";
    }
    if (!isset($_POST['sabor'])){   
        $error_sabor = "style='background-color: rgb(235, 127, 132);'";
        $error_sabor_MENSAJE = "campo sabor incompleto";

    } else {
        $error_sabor = "style='background-color: rgb(149, 235, 199);'";
    }
    if (!isset($_POST['sirope'])){   
        $error_sirope = "style='background-color: rgb(235, 127, 132);'";
        $error_sirope_MENSAJE = "campo sirope incompleto";

    } else {
        $error_sirope = "style='background-color: rgb(149, 235, 199);'";
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
    <title>Helados</title>

</head>
<body>
<form method="post">

    <label>Nombre:</label>
    <input type="text" name="nombre" <?php if (isset($_POST['enviar'])){ ?> value="<?php echo $nombre ?>" <?php echo $error_nombre;} ?>></input><br>
    <div style="color:red"><?php echo $error_nombre_MENSAJE ?></div>

    <div <?php if (isset($_POST['enviar'])){ echo $error_sabor; }; ?> >
        <label>Sabor:</label><br>
            nata<input type="radio" name="sabor" value="nata" <?php if (isset($_POST['enviar']) && ($_POST['sabor'] == "nata" )){echo "checked"; }?>>
            fresa<input type="radio" name="sabor" value="fresa" <?php if (isset($_POST['enviar']) && ($_POST['sabor'] == "fresa" )){echo "checked"; }?>>
            vainilla<input type="radio" name="sabor" value="vainilla" <?php if (isset($_POST['enviar']) && ($_POST['sabor'] == "vainilla" )){echo "checked"; }?>>
            chocolate<input type="radio" name="sabor" value="chocolate" <?php if (isset($_POST['enviar']) && ($_POST['sabor'] == "chocolate" )){echo "checked"; }?>><br>
    </div><br>
    <div style="color:red"><?php echo $error_sabor_MENSAJE ?></div>


    <div <?php if (isset($_POST['enviar'])){ echo $error_sirope; }; ?> >
        <label>Sirope:</label><br>
            chocolate<input type="radio" name="sirope" value="chocolate" <?php if (isset($_POST['enviar']) && ($_POST['sirope'] == "chocolate" )){echo "checked"; }?>>
            caramelo<input type="radio" name="sirope" value="caramelo" <?php if (isset($_POST['enviar']) && ($_POST['sirope'] == "caramelo" )){echo "checked"; }?>>
            nada<input type="radio" name="sirope" value="nada" <?php if (isset($_POST['enviar']) && ($_POST['sirope'] == "nada" )){echo "checked"; }?>><br>
    </div><br>
    <div style="color:red"><?php echo $error_sirope_MENSAJE ?></div>


    <input type="submit" name="enviar" value="enviar"><br>

    <h1><?php if (isset($_POST['enviar'])) {echo $mensaje;} ?></h1>

</body>
</html>