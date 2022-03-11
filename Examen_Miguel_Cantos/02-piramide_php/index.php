
<?php
$refresh = "";

if (isset($_POST['caract'])){
    $refresh = true;
}

$caracter = ($_POST['caract']);
$numero = ($_POST['number']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
        if($refresh == true) {
            echo '<meta http-equiv="refresh" content="1;url=http://localhost:9000/index.php">';
        }

        ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="cuerpo">

    <form action="/index.php" method="post" >
        <h1>Generador de piramides</h1>
        <label>Caracter:
            <input type="text" name="caract" id="caract" value=" ">
        </input>

        <label>Numero:
            <input type="number" name="number" id="number" value=" ">
        </input>

        <input type="submit" name="submit" id="submit" value="enviar">
    </form>

    <form method="get" action="/index.php">
        <input type="submit" name="stop" id="stop" value="parar">
    </form>
    
        <p>
            <?php
            for ($o = 0 ; $o < $numero ; $o++ ){
                    for ($i = 0; $i < $o; $i++){
                echo "<span style=' color: #". rand(0,999999). ";'>" . $caracter. "</span>";
                }
                echo "<br>";
            }
            ?>
            
</body>
</html>