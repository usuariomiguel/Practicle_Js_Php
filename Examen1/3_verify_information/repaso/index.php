<?php
#print_r ($_POST);

if (!isset($_POST['nombre']) && !isset($_POST['descripcion']) && !isset($_POST['radio']) ){
    $bienvenida = "Rellena los campos";
}else {
    $completado = "un técnico le contactará";
}
if (isset($_POST['enviar'])){
    if (isset($_POST['nombre']) && $_POST['nombre'] == ""){
        $error_nombre = "style='background-color: rgb(235, 127, 132);'";
        $nombre = ($_POST['nombre']);
    }else {
        $nombre = ($_POST['nombre']);
        $error_nombre = "style='background-color: rgb(149, 235, 199);'";
    }
    if (isset($_POST['descripcion']) && $_POST['descripcion'] == ""){
        $error_descripcion = "style='background-color: rgb(235, 127, 132);'";
        $descripcion = ($_POST['descripcion']);
    }else {
        $descripcion = ($_POST['descripcion']);
        $error_descripcion = "style='background-color: rgb(149, 235, 199);'";
    }
    if (!isset($_POST['radio'])){   
        $error_radio = "style='background-color: rgb(235, 127, 132);'";
    } else {
        $error_radio = "style='background-color: rgb(149, 235, 199);'";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repaso formularios</title>
</head>
<body>
    <form method="post">
        <label>Nombre: </label>
        <input type="text" name="nombre" <?php if (isset($_POST['enviar'])){ ?> value="<?php echo $nombre ?>" <?php echo $error_nombre;} ?> >
        <label>Descipcion: </label>
        <input type="text" name="descripcion" <?php if (isset($_POST['enviar'])){ ?> value="<?php echo $descripcion ?>" <?php echo $error_descripcion;} ?>>
        <p>Es urgente?</p>
        <div <?php if (isset($_POST['enviar'])){ echo $error_radio; }; ?> >
            <input type="radio" name="radio" value="s" <?php if (isset($_POST['enviar']) && ($_POST['radio'] == "s" )){echo "checked"; }?>>Si
            <input type="radio" name="radio" value="n" <?php if (isset($_POST['enviar']) && ($_POST['radio'] == "n" )){echo "checked"; }?>>No<br><br>
        </div>
        <input type="submit" value="enviar" name="enviar">
    </form>
    <?php if (!isset($_POST['enviar'])){ echo $bienvenida; }else{ echo $completado;} ?>
</body>
</html>