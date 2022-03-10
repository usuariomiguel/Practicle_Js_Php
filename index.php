<?php
session_start();
print_r($_SESSION);
print_r($_POST);
if (!isset($_SESSION['intentos'])){
    $_SESSION['intentos'] = 0;
    $_SESSION['rand'] = mt_rand(1,100);
    $msg_style = "";
};
$_SESSION['intentos'] = $_SESSION['intentos'] + 1;
if (isset($_POST['number'])){
    if ($_SESSION['rand'] == $_POST['number']){
        $msg = "¡Acertaste!";
        $msg_style = "background-color: green; color:white; font-size: xx-large; text-align:center; padding: 20px;";
        include("./confeti.css");
    } elseif ($_SESSION['rand'] > $_POST['number']) {
        $msg = "El número introducido es <b>menor</b> que el objetivo. </br> ¡Vuelve a intentarlo!";
        $msg_style = "background-color: red; color:white; font-size: x-large; text-align:center; padding: 10px;";
    } elseif ($_SESSION['rand'] < $_POST['number']) {
        $msg = "El número introducido es <b>mayor</b> que el objetivo. </br> ¡Vuelve a intentarlo!";
        $msg_style = "background-color: red; color:white; font-size: x-large; text-align:center; padding: 10px;";
    }
}
if ($_POST['enviar'] == "Reiniciar"){
    $_SESSION['intentos'] = 0;
    $_SESSION['rand'] = mt_rand(1,100);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Adívina el número!</title>
</head>
<body class="container" style="margin: 2%;">
    <h1>¡Casi imposible! ¡Juega ahora!</h1>
    <h4>No vas a ganar nada. Pero por lo menos no pierdes, como en las casas de apuestas.</h4>
    </br>
    <div id="msg" style="<?=$msg_style?>"><?=$msg?></div>
    </br>
    <p style="margin-left:15px;">Introduce un número entre 0 y 100 en la siguiente casilla. </p>

    <form action="index.php" method="post" style="margin-left:15px;">
        <input type="number" name="number" id="number" min="0" max="100" required style="width: 100px;" autofocus>
        <input type="submit" name="enviar" value="¡Quiero intentarlo!">
    </form>
    <div style="margin-top: 50px; margin-left:15px;"">
    <p>Use el botón siguiente para reiniciar el juego</p>
    <form action="index.php" method="post">
        <input type="submit" name="enviar" value="Reiniciar">
    </form>
    </div>
</body>
</html>