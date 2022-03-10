<?php
session_start();
if (!isset($_SESSION['intentos'])){
    $_SESSION['intentos'] = 0;
    $_SESSION['rand'] = mt_rand(1,20);
    $msg_style = "";
};

$numero = $_POST['nsecret'];
$aleatorio = $_SESSION['rand'];

if (isset($numero)){
    if ( $numero == $aleatorio ){
        $resultado = "correcto";
    } else if ($numero > $aleatorio){
        $resultado = "el numero que pusistes es mayor";
    } else if ($numero < $aleatorio){
        $resultado = "el numero que pusistes es menor";
    } else {
        $resultado = "incorrecto";
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
    <title>Document</title>
</head>
<body id="cuerpo"> 
    <h1>Numeridinator3000</h1><hr>
    <h2>Adivina el numero secreto</h2>
    <form method="post">
        <label>Introduce un numero   
            <input type="number" name="nsecret" value=""></input>
        </label> 
        <input type="submit" name="submit"></input>
    </form>
    <p>
        <?php 
            echo $resultado ; 
        ?>
</body>
</html>