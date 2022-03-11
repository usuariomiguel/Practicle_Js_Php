<?php
/*
Haz dos página: index y config

En index saldrá lorem ipsum (texto aleatorio que hace de contenido) y un div arriba a la derecha con el texto anónimo y una foto de anónimo o el nombre configurado y la imagen En config tendrás un formulario para configurar tu nombre y una url a una image
*/

session_start();

if (!isset($_SESSION['nickname'])){
    $nickname = "Anónimo";
} else {
    $nickname = $_SESSION['nickname'];
}
if (!isset($_SESSION['nick_image'])){
    $nick_image = "anon.png";
} else {
    $nick_image = $_SESSION['nick_image'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nickname</title>
    <style>   
        #lorem {width: 70%; margin-left: 5%; margin-top: 50px;    float: left; position: relative;}
        #lorem p {text-align: justify;}
        #nickname{float: right;  position: relative; width: 20%; text-align: center; margin-top: 70px;}
        h1 {text-align: center;}
        #nombre > p {font-size: large; font-weight: bolder;}
    </style>
</head>
<body>
    <div id="centrador">
        <div id="lorem">
            <h1>Nickname</h1>
            <p>Lorem fistrum va usté muy cargadoo apetecan tiene musho peligro ahorarr diodeno no puedor llevame
                al sircoo. Qué dise usteer jarl fistro la caidita ese pedazo de pecador benemeritaar no puedor. 
                Ese que llega ahorarr condemor no puedor no te digo trigo por no llamarte Rodrigor diodenoo de la 
                pradera. Va usté muy cargadoo fistro papaar papaar la caidita diodenoo mamaar fistro diodeno va 
                usté muy cargadoo. Pecador ahorarr amatomaa no puedor te va a hasé pupitaa fistro caballo blanco 
                caballo negroorl qué dise usteer apetecan me cago en tus muelas fistro. A peich ese que llega 
                fistro pupita se calle ustée de la pradera.</p>
            <div id="a-wrapper">
                <p style="text-align: center;"><a href="config.php"> Editar tu nickname </a></p>
            </div>
        </div>
        <div id="nickname">
            <div id="imagen">
                <img src="<?=$nick_image?>" alt="">
            </div>
            <div id="nombre">
                    <p><?=$nickname?></p>
            </div>
        </div>
    </div>
</body>
</html>