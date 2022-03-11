<?php
/*
Crea un formulario para enviar números de al menos 5 dígitos (el usuario siempre manda número de 5 dígitos, no es necesario hacer esta verificación)

Cuando envía el formulario la página mantiene el número, saca un mensaje diciendo si el número es primo o no. La página muestra un contador de cuántos primos ha acertado el usuario.
*/
session_start();
//print($_SESSION['intentos']);
function esPrimo($numero){
    if(!is_numeric($numero)){
        return false;
    }
    for ($i = 2; $i < $numero; $i++) {
        if (($numero % $i) == 0) {
            return false; // No es primo :(
        }
    }
    return true; // Es primo :)
};

if (!isset($_SESSION['intentos'])){
    $_SESSION['intentos'] = 0;
    $_SESSION['aciertos'] = 0;
    $msg ="";
} else {
    if (esPrimo($_POST['number'])){
    $_SESSION['aciertos'] = $_SESSION['aciertos'] + 1;
    
    $msg = "¡Acertaste! El número " . $_POST['number'] . " es primo. <br> Intentos hasta ahora: " . $_SESSION['intentos'] . "<br> Aciertos hasta ahora: " . $_SESSION['aciertos'];
    
    $msg_style = "background-color: green; color:white; font-size: xx-large; text-align:center; padding: 20px;";
    } elseif (!esPrimo($_POST['number']))  {
        $msg = "¡Casi! El número " . $_POST['number'] . " <b>NO</b> es primo. <br> Intentos hasta ahora: " . $_SESSION['intentos'] . "<br> Aciertos hasta ahora: " . $_SESSION['aciertos'];
        
        $msg_style = "background-color: red; color:white; font-size: x-large; text-align:center; padding: 10px;";
    };
};

// Ir sumando intentos
$_SESSION['intentos'] = $_SESSION['intentos'] + 1;

// Si envía reiniciar, poner intentos a 0. 
if ($_POST['enviar'] == "Reiniciar"){
    $_SESSION['intentos'] = 0;
    $_SESSION['aciertos'] = 0;
    $msg = "";
    $msg_style = "";
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina Primos</title>
</head>
<body class="container" style="margin: 2%;">
    <h1>¡Casi imposible! ¡Juega ahora!</h1>
    <h4>No vas a ganar nada. Pero por lo menos no pierdes, como en las casas de apuestas.</h4>
    </br>
    <div id="msg" style="<?=$msg_style?>"><?=$msg?></div>
    </br>
    <p style="margin-left:15px;">Introduce un número de al menos cinco cifras en la siguiente casilla:</p>

    <form action="index.php" method="post" style="margin-left:15px;">
        <input type="number" name="number" id="number" min="1000" required style="width: 100px;" autofocus>
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
