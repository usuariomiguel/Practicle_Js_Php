<?php
include ("./acceso_datos.php");
if (isset($_POST['ip']) && isset($_POST['aula']) && isset($_POST['equipo'])) {
    //Crear variables
    $ip = ($_POST['ip']);
    $aula = ($_POST['aula']);
    $equipo = ($_POST['equipo']);
    //echo "IP:", $ip,"<br>","Aula: ", $aula,"<br>", "Equipo:", $equipo;
    //Insertar informacion en base de datos
    $tablaip = $conexion_bd->prepare("INSERT INTO ip (ip) VALUES ('$ip')");
    $tablaula = $conexion_bd->prepare("INSERT INTO aula (nombre) VALUES ('$aula')");
    $tablaequipo = $conexion_bd->prepare("INSERT INTO tipo_equipo (equipo) VALUES ('$equipo')");
    $tablaip ->execute();
    $tablaula ->execute();
    $tablaequipo ->execute();
} else {
    echo "<p style = 'color: red;'>Tienes que rellenar todos los campos del formulario</p>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Procesador formulario</h1>
    <form method="post">
        <label>Aula:</label>
        <input type="text" name="aula">
        <label>Ip:</label>
        <input type="text" name="ip"><br><BR>
        <label>Tipo:</label>
        <input type="radio" value="intel" name="equipo">INTEL
        <input type="radio" value="AMD" name="equipo">AMD
        <input type="radio" value="asus" name="equipo">ASUS<BR><BR>
        <input type="submit" value="enviar" id="enviar"> <hr>
        <?php if (isset($_POST['ip']) && isset($_POST['aula']) && isset($_POST['equipo'])) {
            echo "IP:", $ip,"<br>","Aula: ", $aula,"<br>", "Equipo:", $equipo; 
        }?>
    </form>
</body>
</html>