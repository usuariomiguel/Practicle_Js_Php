<?php
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

if (isset($_POST['enviar'])){
    $nickname = $_POST['nickname'];
    $_SESSION['nickname'] = $_POST['nickname'];
    $nick_image = $_POST['nick_image'];
    $_SESSION['nick_image'] = $_POST['nick_image']; 
};
print_r($_POST);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurar Nickname</title>
    <style>   
        #lorem {width: 70%; margin-left: 5%; margin-top: 50px;    float: left; position: relative;}
        #lorem p {text-align: justify;}
        #nickname_wrapper{float: right;  position: relative; width: 20%; text-align: center; margin-top: 70px;}
        h1 {text-align: center;}
        #nombre > p {font-size: large; font-weight: bolder;}
        .intros {margin-top: 25px; margin-left: 5%; width: 40%}
        #sent-button{text-align:center; margin-left: 35%; font-weight: bolder; height: 40px}
        pre { display: inline; margin: 0; }
    </style>
</head>
<body>
    <div id="centrador">
        <div id="lorem">
            <h1>Configura tu Nickname</h1>
            <div id="form-wrapper">
                <form action="config.php" method="post">
                    <label for="nickname">Nickname: &nbsp;&nbsp;&nbsp;</label>
                    <input class="intros" name="nickname" id="nickname" type="text" tabindex="1" placeholder="Elige el nickname que más te guste" />  </br>
                    <label for="nick_image">Imagen: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input class="intros" name="nick_image" id="nick_image" type="text" tabindex="2" placeholder="URL de la imagen para tu perfil"/>
                    <br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Puedes probar con <pre>anon2.png</pre></br></br></br>
                    <input id="sent-button" type="submit" name="enviar" value="Enviar" >
                    </form>
        <br>
            </div>
            <div id="a-wrapper">
                <p style="text-align: center;"><a href="index.php">Ver el texto</a></p>
            </div>
        </div>
        <div id="nickname_wrapper">
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