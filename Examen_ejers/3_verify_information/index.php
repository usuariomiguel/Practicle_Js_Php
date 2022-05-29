<?php

$nombre= "";
$desc= "";
$vacio=false;
$vacio2=false;
$s=false;
$n=false;
$vacio3=false;
$correcto="";

if (
    
    isset($_POST['enviar']) && ($_POST['enviar'] != "" )
    
    ) {

    //si pulso el boton de enviar
    $nombre = $_POST['nombre'];

    if ($_POST['nombre'] != '' ) {

        //campo nombre no esta vacio
        $nombre = $_POST['nombre'];

    } else {

        //campo nombre vacio
        $vacio =  true;

    }

    if ($_POST['desc'] != '' ) {

        //campo desc no esta vacio
        $desc = $_POST['desc'];

    } else {

        //campo desc vacio
        $vacio2 =  true;

    }


    if ($_POST['s'] == 's') {

        $s = true;

    }

    if ($_POST['n'] == 'n') {

        $n = true;

    }

    if (($n == false) && ($s == false)) {

        $vacio3 = true;

    }



    if ($nombre == $_POST['nombre'] && $desc == $_POST['desc'] && ($s == true  || $n == true )  ) {

        $correcto = "<h3>un técnico le contactará</h3>";

    }

} else {

    //no pulso el boton de enviar


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Verificacion</title>

</head>
<body>

<form method="post">

    <label>Nombre:</label>
    <input style="background-color: <?php if ($vacio == true ) {echo 'red';} else { } ?>;" type="text" name="nombre" value="<?=$nombre?>" >
    </input>

    <label>Descripcion:</label>
    <input style="background-color: <?php if ($vacio2 == true ) {echo 'red';} else { } ?>;" type="text" name="desc" value="<?=$desc?>">
    </input>

    <b><p>¿Es urgente?</p></b>

    <span style="background-color: <?php if ($vacio3 == true ) {echo 'red';} else { } ?>;">

        <input type="radio" name="s" value="s" <?php if ($s == true ) {echo 'checked';} ?> > Si</input>

        <input type="radio" name="n" value="n" <?php if ($n == true ) {echo 'checked';} ?> > No</input>

    </span><br><br>

    <input type="submit" name="enviar" value="enviar">

    <?=$correcto?>

</body>
</html>